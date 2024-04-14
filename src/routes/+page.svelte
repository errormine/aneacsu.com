<script>
    /** @type {import('./$types').PageData} */
    export let data;
</script>

<svelte:head>
    <title>Andrei Neacsu</title>
</svelte:head>

<section>
    <h2>About</h2>
    <p>I'm a student in Chicago, IL. I'm also a full-stack developer, amateur photographer, and artist.</p>
    <p>I'm currently interested in video game development, and would love to share some games with you.</p>
    <p>Honestly, I have no clue what I'm doing!</p>
</section>
<section>
    <h2>Links</h2>
    <ul>
        <li>
            <a href="mailto:andrei@aneacsu.com">Email</a>
        </li>
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
    {#each data.posts.slice(0, 3) as post}
        <article>
            <h3>{post.metadata.title}</h3>
            <p>{post.metadata.description}</p>
            <a href={"/blog/"+post.slug}>Read more</a>
        </article>
    {/each}
    <p><a href="/blog">Previous posts &rarr;</a></p>
</section>
