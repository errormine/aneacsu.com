// Adapted from https://www.davidwparker.com/posts/how-to-make-an-rss-feed-in-sveltekit
/** @type {import('./$types').RequestHandler} */
export const prerender = true;
export async function GET({ fetch }) {
    const response = await fetch('/api/posts');
    const posts = await response.json();

    const body = `<?xml version="1.0" encoding="UTF-8" ?>
    <rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
    <atom:link href="https://aneacsu.com/rss" rel="self" type="application/rss+xml" />
    <title>Andrei Neacsu</title>
    <link>https://aneacsu.com</link>
    <description>Andrei Neacsu's blog about random things</description>
    ${posts.map((post) => `
    <item>
        <guid>https://aneacsu.com/blog/${post.slug}</guid>
        <title>${post.metadata.title}</title>
        <link>https://aneacsu.com/blog/${post.slug}</link>
        <description>${post.metadata.description}</description>
        <pubDate>${new Date(post.metadata.date).toUTCString()}</pubDate>
    </item>`
    ).join('')}
    </channel>
    </rss>`;
    
    const headers = {
        'Cache-Control': `max-age=0, s-max-age=3600`,
        'Content-Type': 'application/xml',
    };

    return new Response(body, { headers });
};

