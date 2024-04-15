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
<nav data-sveltekit-reload>
    <ul>
        <li class:active={!pathname}>
            <a href="/">Home</a>
        </li>
        <li class:active={pathname=="resume"}>
            <a href="/resume">Resume</a>
        </li>
        <li class:active={pathname=="projects"}>
            <a href="/projects">Projects</a>
        </li>
        <li class:active={pathname=="gallery"}>
            <a href="/gallery">Gallery</a>
        </li>
        <li class:active={pathname=="about"}>
            <a href="/about">About</a>
        </li>
        <li class:active={pathname=="blog"}>
            <a href="/blog">Blog</a>
        </li>
    </ul>
</nav>
<main class="content-grid">
    <slot/>
    <footer>
        Created with love for the web.
    </footer>
</main>

<style>
    h1 {
        text-align: right;
        padding-right: 2rem;
    }

    nav {
        position: absolute;
        top: 0;
        background: var(--gradient-gray);
        text-align: right;
    }
    
    nav li {
        padding: 0.5rem;
        padding-left: 5rem;
        padding-right: 1rem;
    }

    nav li.active {
        background: white;
    }
</style>
