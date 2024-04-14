/** @type {import('./$types').PageLoad} */
export async function load({ fetch }) {
    const response = await fetch('/api/posts?amount=5');
    const posts = await response.json();

    return {
        posts
    };
}
