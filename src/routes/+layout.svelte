<script>
    import 'agnostic-svelte/css/common.min.css';
    
    /** @type {import('./$types').LayoutData} */
    export let data;
</script>

<main>
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
                    <a href="/about">About</a>
                </li>
            </ul>
        </nav>
    </header>
    <slot/>
    <footer>
        Created with love for the web.
    </footer>
</main>
