<script>
    /** @type {import('./$types').PageData} */
    export let data;
</script>

<svelte:head>
    <link rel="stylesheet" href="/css/prism-cb.css">
    <title>{data.metadata.title}</title>
</svelte:head>
<article>
    <h2 id="top">{data.metadata.title}</h2>
    <svelte:component this={data.content} />
    <p><a href="#top">Back to top &uarr;</a></p>
</article>
