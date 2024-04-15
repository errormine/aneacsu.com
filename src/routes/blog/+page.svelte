<script>
    /** @type {import('./$types').PageData} */
    export let data;
</script>

<section>
    <header>
        <h2>Blog</h2>
        <p>Writings about various things... updated once in a while.</p>
    </header>
    <section class="blog-posts">
        {#each data.posts as post}
            <section class="post round-corners">
                <header>
                    <h3>{post.metadata.title}</h3>
                    <small>Created {post.metadata.dateLocal}</small>
                </header>
                <p>{post.metadata.description}</p>
                <a href={"/blog/"+post.slug}>Read more...</a>
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
        gap: 1rem;
    }

    .post {
        border: 1px solid var(--clr-primary);
        padding: 1rem;
    }
</style>
