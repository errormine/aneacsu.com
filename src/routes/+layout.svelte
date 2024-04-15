<script>
    import { page } from '$app/stores';
    import { Breadcrumb } from 'agnostic-svelte';
    import 'agnostic-svelte/css/common.min.css';

    let routes = [
        { label: 'home', url: '/' }
    ];
    let pathname = $page.url.pathname.split('/').filter(Boolean);

    if (pathname != undefined) {
        for (let path of pathname) {
            routes.push({ label: path, url: '/' + path });
        }
    }
</script>

<main class="content-grid">
    <header class="breakout">
        <h1>Andrei Neacsu</h1>
        <Breadcrumb {routes} />
    </header>
    <slot/>
    <footer>
        Created with love for the web.
    </footer>
</main>

<style>
    h1 {
        font-style: italic;
    }
</style>
