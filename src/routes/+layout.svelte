<script>
    import { page } from '$app/stores';
    import Bubble from '$lib/components/Bubble.svelte';
    import Breadcrumb from '$lib/components/Breadcrumb.svelte';

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

<svelte:head>
    <meta property="theme-color" content="#e0d5c9">
    <meta property="og:image" content="/img/favicon.png">
    <meta content="Andrei Neacsu" property="og:site_name">
</svelte:head>
<main class="content-grid">
    <header id="head">
        <h1>Andrei Neacsu</h1>
        <Breadcrumb {routes} />
    </header>
    <slot/>
    <footer>
        <header>
            <p>Created with love for the web.</p>
            <section class="contact">
                <Bubble href="mailto:andnea823@gmail.com">Email</Bubble>
                <Bubble href="https://www.linkedin.com/in/andrei-neacsu-293421305/">LinkedIn</Bubble>
                <Bubble rel="me" href="https://bsky.app/profile/errormine.bsky.social">Bluesky</Bubble>
                <Bubble href="https://github.com/errormine">GitHub</Bubble>
            </section>
        </header>
        <section class="align-right flex-center">
            <p>This website is <a href="https://github.com/errormine/aneacsu.com">open source</a></p>
            <p>It was created using <a href="https://kit.svelte.dev/">SvelteKit</a></p>
            <p>All of the code for this website is in the public domain</p>
        </section>
        <section class="cat">
            <img src="/img/kot.png" alt="A cat meditating">
        </section>
        <section class="flex-center">
            <p>Add my blog to your <a href="/blog/rss.xml">RSS Feed</a></p>
            <p>Bored and confused? Read a <a href="https://en.wikipedia.org/wiki/Special:Random">random Wikipedia article</a></p>
            <p>&ldquo;<i>Round the Calendar in Portugal&rdquo;</i> courtesy of <a href="https://www.flickr.com/photos/britishlibrary/11114321176/in/album-72157672074712488/">The British Library</a></p>
        </section>
    </footer>
</main>

<style>
    h1 {
        font-style: italic;
    }

    footer {
        display: grid;
        grid-template-columns: 1fr 10rem 1fr;
        gap: 1rem;
        padding: 2rem 0;
    }

    footer > header {
        grid-column: span 3;
        text-align: center;
    }

    footer > header .contact {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 1rem;
    }

    footer .flex-center {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    @media (max-width: 40rem) {
        footer {
            display: flex;
            flex-direction: column;
        }

        .cat {
            max-width: 10rem;
            margin: 0 auto;
        }
    }
</style>
