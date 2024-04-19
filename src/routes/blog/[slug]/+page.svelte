<script>
    /** @type {import('./$types').PageData} */
    export let data;
</script>

<svelte:head>
    <meta property="og:title" content="{data.metadata.title}">
    <meta property="og:description" content="{data.metadata.description}">
    <meta property="og:image" content="{data.metadata.banner}">

    <link rel="stylesheet" href="/css/prism-cb.css">
    <title>{data.metadata.title}</title>
</svelte:head>
<article>
    <header>
        {#if data.metadata.banner}
            <img src={data.metadata.banner} alt={data.metadata.alt}>
        {/if}
        <h2>{data.metadata.title}</h2>
        <small>Created {data.metadata.dateLocal}</small>
    </header>
    <svelte:component this={data.content} />
    <p><a href="#head">Back to top &uarr;</a></p>
</article>

<style>
    small {
        position: relative;
        top: -0.25rem;
        font-style: italic;
    }
</style>
