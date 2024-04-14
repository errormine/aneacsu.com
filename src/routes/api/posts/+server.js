import { json } from '@sveltejs/kit';

/** @type {import('./$types').RequestHandler} */
export async function GET() {
    const postFiles = import.meta.glob('/src/routes/blog/_posts/*.md');
    const iPostFiles = Object.entries(postFiles);

    const allPosts = await Promise.all(
        iPostFiles.map(async ([path, resolver]) => {
            let { metadata } = await resolver();
            if (metadata.title === undefined) return;
            const filename = path.split('/').pop();
            const date = filename.split('-').slice(0, 3).join('-');
            metadata = {
                ...metadata,
                date,
            };

            return {
                filename,
                metadata,
            };
        })
    );

    const sortedPosts = allPosts.sort((a, b) => {
        return new Date(b.metadata.date) - new Date(a.metadata.date);
    });

    return json(sortedPosts);
};
