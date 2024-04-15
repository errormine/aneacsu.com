// From https://joshcollinsworth.com/blog/build-static-sveltekit-markdown-blog
/** @type {import('./$types').PageLoad} */
export async function load({ params }) {
    const post = await import(`../_posts/${params.slug}.md`);
    const content = post.default;

    const date = params.slug.split('-').slice(0, 3).join('-');
    const dateLocal = new Date(date).toLocaleDateString(undefined, { timeZone: 'UTC', day: 'numeric', month: 'long', year: 'numeric' });

    let metadata = {
        ...post.metadata, 
        dateLocal
    };

    return {
        metadata,
        content
    };
};
