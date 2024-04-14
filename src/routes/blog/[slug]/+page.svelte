<script>
    import { Breadcrumb } from 'agnostic-svelte';

    /** @type {import('./$types').PageData} */
    export let data;

    let routes = [
        { label: 'Home', url: '/' },
        { label: 'Blog', url: '/blog' },
        { label: data.metadata.title, url: `/blog/${data.metadata.slug}` }
    ];
</script>

<section>
    <Breadcrumb {routes} />
    <h2 id="top">{data.metadata.title}</h2>
    <svelte:component this={data.content} />
    <p><a href="#top">Back to top &uarr;</a></p>
</section>
