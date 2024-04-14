<script>
    /** @type {import('./$types').PageData} */
    export let data;

    console.log(data);
</script>

<section>
    <svelte:component this={data.content} />
</section>
