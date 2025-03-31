<script>
    /** @type {import('./$types').PageData} */
    export let data;
</script>

<svelte:head>
    <meta property="og:title" content="Andrei Neacsu">
    <meta property="og:description" content="Hello, I am a human being. Honestly, I have no clue what I'm doing!">

    <title>Andrei Neacsu</title>
</svelte:head>

<section>
    <h2>About</h2>
    <p>Hello, I am a human being. Honestly, I have no clue what I'm doing!</p>
    <p>I enjoy tinkering and building things in my free time. My interests include game development, photography, and digital art.</p>
    <p>I would like to spend more time hiking, traveling, and learning new things.</p>
</section>
<section>
    <h2>Projects</h2>
    <p>Here be dragons.</p>
    <p><a href="/projects" class="float-right">Projects &rarr;</a></p>
</section>
<section>
    <h2>Blog</h2>
    <ol class="blog-posts">
        {#each data.posts.slice(0, 5) as post}
            <li class="flex space-between align-center">
                <a href={"/blog/"+post.slug}>{post.metadata.title}</a>
                <span>{post.metadata.date}</span>
            </li>
        {/each}
        <li>
            <a href="/blog" class="float-right">Previous posts &rarr;</a>
        </li>
    </ol>
</section>

<style>
    .blog-posts {
        display: grid;
        gap: 0.5rem;
        list-style-type: none;
        padding: 0;
    }
</style>
