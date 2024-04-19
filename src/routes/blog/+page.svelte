<script>
    /** @type {import('./$types').PageData} */
    export let data;
</script>

<svelte:head>
    <meta property="og:title" content="Andrei Neacsu">
    <meta property="og:description" content="Writings about various things... updated once in a while.">

    <title>Blog - Andrei Neacsu</title>
</svelte:head>
<section>
    <header>
        <h2>Blog</h2>
        <p>Writings about various things... updated once in a while.</p>
    </header>
    <section class="blog-posts">
        {#each data.posts as post}
            <section class="post round-corners">
                <header>
                    <h3><a href={"/blog/"+post.slug}>{post.metadata.title}</a></h3>
                    <small>Created {post.metadata.dateLocal}</small>
                    <p>{post.metadata.description}</p>
                </header>
            </section>
        {/each}
    </section>
</section>

<style>
    small {
        position: relative;
        top: -0.25rem;
        left: 0.5rem;
        font-style: italic;
    }
    
    .blog-posts {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
</style>
