<script>
    import { page } from '$app/stores';

    // Ensures pages are staticly prerendered
    export const prerender = true;

    /** @type {import('./$types').LayoutData} */
    export let data;

    let pathname = $page.url.pathname.split('/').filter(Boolean)[0];
</script>

<header>
    <h1>Andrei Neacsu</h1>
</header>
<main class="content-grid">
    <slot/>
    <footer>
        Created with love for the web.
    </footer>
</main>

<style>
    h1 {
        padding-left: 2rem;
    }
</style>
