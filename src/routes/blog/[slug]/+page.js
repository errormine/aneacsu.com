// From https://joshcollinsworth.com/blog/build-static-sveltekit-markdown-blog
/** @type {import('./$types').PageLoad} */
export async function load({ params }) {
    const post = await import(`../_posts/${params.slug}.md`);
    const content = post.default;

    return {
        metadata: post.metadata,
        content,
    };
};
