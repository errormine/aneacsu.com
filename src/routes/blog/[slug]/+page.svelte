<script>
    /** @type {import('./$types').PageData} */
    export let data;
</script>

<svelte:head>
    <meta property="og:title" content="{data.metadata.title}">
    <meta property="og:description" content="{data.metadata.description}">

    <link rel="stylesheet" href="/css/prism-cb.css">
    <title>{data.metadata.title}</title>
</svelte:head>
<article>
    <h2>{data.metadata.title}</h2>
    <svelte:component this={data.content} />
    <p><a href="#head">Back to top &uarr;</a></p>
</article>
