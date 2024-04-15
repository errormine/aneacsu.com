<script>
    /** @type {import('./$types').PageData} */
    export let data;
</script>

<section>
    <h2>Blog</h2>
    {#each data.posts as post}
        <article>
            <header>
                <h3>{post.metadata.title}</h3>
                <small>{post.metadata.date}</small>
            </header>
            <p>{post.metadata.description}</p>
            <a href={"/blog/"+post.slug}>Read more</a>
        </article>
    {/each}
</section>
