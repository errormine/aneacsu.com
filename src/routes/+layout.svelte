<script>
    import 'agnostic-svelte/css/common.min.css';
    
    /** @type {import('./$types').LayoutData} */
    export let data;
</script>

<header>
    <h1>
        <a href="/">Andrei Neacsu</a>
    </h1>
    <nav>
        <ul>
            <li>
                <a href="/resume">Resume</a>
            </li>
            <li>
                <a href="/projects">Projects</a>
            </li>
            <li>
                <a href="/gallery">Gallery</a>
            </li>
            <li>
                <a href="/about">About</a>
            </li>
            <li>
                <a href="/blog">Blog</a>
            </li>
        </ul>
    </nav>
</header>
<main class="content-grid">
    <slot/>
    <footer>
        Created with love for the web.
    </footer>
</main>
