<script>
    /** @type {import('./$types').PageData} */
    export let data;
</script>

<section>
    <h1>Blog</h1>
    {#each data.posts as post}
        <article>
            <h3>{post.metadata.title}</h3>
            <p>{post.metadata.description}</p>
            <a href={"/blog/"+post.slug}>Read more</a>
        </article>
    {/each}
</section>
