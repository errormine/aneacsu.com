<script>
    /** @type {import('./$types').PageData} */
    export let data;
</script>

<article>
    <h2 id="top">{data.metadata.title}</h2>
    <svelte:component this={data.content} />
    <p><a href="#top">Back to top &uarr;</a></p>
</article>

<style>
    article {
        text-indent: 2rem;
    }
</style>
