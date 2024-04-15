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
    <header>
        <p>Created with love for the web.</p>
        <section class="contact">
            <Bubble href="mailto:andrei@aneacsu.com">Email</Bubble>
            <Bubble href="https://infosec.exchange/@errormine">Mastodon</Bubble>
            <Bubble href="https://github.com/prycaustic">GitHub</Bubble>
        </section>
    </header>
    <section class="align-right flex-center">
        <p>This website is <a href="https://github.com/prycaustic/aneacsu.com">open source</a></p>
        <p>It was created using <a href="https://kit.svelte.dev/">SvelteKit</a> and <a href="https://www.agnosticui.com/">Agnostic UI</a></p>
        <p>All of the code for this website is in the public domain</p>
    </section>
    <section>
        <img src="/img/kot.png" alt="A cat meditating">
    </section>
    <section class="flex-center">
        <p>Add my blog to your <a href="/blog/rss.xml">RSS Feed</a></p>
        <p>Bored and confused? Read a <a href="https://en.wikipedia.org/wiki/Special:Random">random Wikipedia article</a></p>
        <p>&ldquo;<i>Round the Calendar in Portugal&rdquo;</i> courtesy of <a href="https://www.flickr.com/photos/britishlibrary/11114321176/in/album-72157672074712488/">The British Library</a></p>
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

    footer > header {
        grid-column: span 3;
        text-align: center;
    }

    footer .flex-center {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
</style>
