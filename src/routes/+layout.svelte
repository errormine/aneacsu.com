<script>
    import { page } from '$app/stores';
    import { Breadcrumb } from 'agnostic-svelte';
    import 'agnostic-svelte/css/common.min.css';

    // Ensures pages are staticly prerendered
    export const prerender = true;

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

<header>
    <h1>Andrei Neacsu</h1>
</header>
<nav>
    <Breadcrumb {routes} />
</nav>
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
