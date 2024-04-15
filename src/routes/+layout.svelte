<script>
    import { page } from '$app/stores';
    import { Breadcrumb } from 'agnostic-svelte';
    import 'agnostic-svelte/css/common.min.css';
    import Bubble from '$lib/components/Bubble.svelte';

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
</main>
<footer>
    <p class="header">Created with love for the web.</p>
    <section class="align-right">
        <p>This website is <a href="https://github.com/prycaustic/aneacsu.com">open source</a>.</p>
        <p>It was created using <a href="https://kit.svelte.dev/">SvelteKit</a> and <a href="https://www.agnosticui.com/">Agnostic UI</a>.</p>
        <p>All of the code for this website is in the public domain.</p>
    </section>
    <section class="flex-column gap-05">
        <Bubble href="mailto:andrei@aneacsu.com">Email</Bubble>
        <Bubble href="https://github.com/prycaustic">GitHub</Bubble>
        <Bubble href="https://infosec.exchange/@errormine">Mastodon</Bubble>
    </section>
</footer>

<style>
    h1 {
        font-style: italic;
    }

    footer {
        display: grid;
        grid-template-columns: 1fr 10rem 1fr;
        gap: 1rem;
        padding: 2rem;
    }

    footer .header {
        grid-column: span 3;
        text-align: center;
    }
</style>
