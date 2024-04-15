import { json } from '@sveltejs/kit';

/** @type {import('./$types').RequestHandler} */
export async function GET() {
    const postFiles = import.meta.glob('/src/routes/blog/_posts/*.md');
    const iPostFiles = Object.entries(postFiles);

    const allPosts = [];
    for (const [path, resolver] of iPostFiles) {
        let { metadata } = await resolver();

        const filename = path.split('/').pop();
        const slug = filename.replace('.md', '');
        const date = filename.split('-').slice(0, 3).join('-');
        const dateLocal = new Date(date).toLocaleDateString(undefined, { timeZone: 'UTC', day: 'numeric', month: 'long', year: 'numeric' });
        
        metadata = {
            ...metadata,
            date,
            dateLocal,
        };

        if (metadata.published == false) continue;
        allPosts.push({
            slug,
            metadata,
        });
    }

    const sortedPosts = allPosts.sort((a, b) => {
        return new Date(b.metadata.date) - new Date(a.metadata.date);
    });

    return json(sortedPosts);
};
