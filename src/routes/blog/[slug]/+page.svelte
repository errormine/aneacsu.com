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
            <img class="banner" src={data.metadata.banner} alt={data.metadata.alt}>
        {/if}
        <h2>{data.metadata.title}</h2>
        <small>Created {data.metadata.dateLocal}</small>
    </header>
    <svelte:component this={data.content} />
    <p><a href="#head">Back to top &uarr;</a></p>
</article>

<style>
    .banner {
        margin: 1rem 0;
    }

    small {
        position: relative;
        top: -0.25rem;
        left: 0.5rem;
        font-style: italic;
    }

    :global(code) {
        font-family: monospace;
        background-color: var(--clr-dark-brown);
        color: var(--clr-off-white);
        font-size: 0.8rem;
        padding: 0.2rem;
        border-radius: 0.2rem;
    }
</style>
