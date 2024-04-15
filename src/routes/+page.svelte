<script>
    /** @type {import('./$types').PageData} */
    export let data;
</script>

<svelte:head>
    <title>Andrei Neacsu</title>
</svelte:head>

<section>
    <h2>About</h2>
    <p>I'm a student in Chicago, IL. I'm also a developer, amateur photographer, and artist. I'm currently interested in video game development, and would love to share some games with you.</p>
    <p>Honestly, I have no clue what I'm doing!</p>
</section>
<section>
    <h2>Social Links</h2>
    <ul>
        <li>
            <a href="https://github.com/prycaustic">GitHub</a>
        </li>
        <li>
            <a rel="me" href="https://infosec.exchange/@errormine">Mastodon</a>
        </li>
    </ul>
</section>
<section>
    <h2>Blog</h2>
    <ul class="blog-posts">
        {#each data.posts.slice(0, 5) as post}
            <li class="flex space-between align-center">
                <a href={"/blog/"+post.slug}>{post.metadata.title}</a>
                <span>{new Date(post.metadata.date).toLocaleDateString(undefined, { timeZone: 'UTC', day: 'numeric', month: 'long', year: 'numeric' })} </span>
            </li>
        {/each}
        <li>
            <a href="/blog" class="float-right">Previous posts &rarr;</a>
        </li>
    </ul>
</section>

<style>
    .blog-posts {
        display: grid;
        gap: 0.5rem;
        list-style-type: none;
        padding: 0;
    }
</style>
