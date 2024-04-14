/** @type {import('./$types').LayoutLoad} */
export async function load({ fetch }) {
    const posts = await fetch('/api/posts');

    return {
        posts
    };
}
