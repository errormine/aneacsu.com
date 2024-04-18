<script>
    /** @type {import('./$types').PageData} */
    export let data;
</script>

<section>
    <h2>About me</h2>
    <p>I'm a creative based in Chicago, IL. I enjoy tinkering and building things in my free time. My interests include programming, photography, and digital art. I would like to spend more time hiking, traveling, and visitng new places.</p>
</section>
<section class="skills">
    <header>
        <h2>Personal Tech Stack</h2>
        <p>Tools which I've used in the past and enjoy. I try to use FOSS whenever possible.</p>
    </header>
    <section>
        <p>Languages</p>
        <ol>
            <li>
                <a href="https://www.javascript.com/">
                    <img src="/img/javascript.svg" alt="JavaScript">
                </a>
            </li>
            <li>
                <a href="https://docs.microsoft.com/en-us/dotnet/csharp/">
                    <img src="/img/csharp.svg" alt="C#">
                </a>
            </li>
            <li>
                <a href="https://www.python.org/">
                    <img src="/img/python.svg" alt="Python">
                </a>
            </li>
            <li>
                <a href="https://www.lua.org/">
                    <img src="/img/lua.svg" alt="Lua">
                </a>
            </li>
        </ol>
    </section>
    <section>
        <p>Frontend</p>
        <ol>
            <li>
                <a href="https://kit.svelte.dev/">
                    <img src="/img/svelte.svg" alt="SvelteKit">
                </a>
            </li>
            <li>
                <a href="https://developer.mozilla.org/en-US/docs/Glossary/HTML5">
                    <img src="/img/html5.svg" alt="HTML 5">
                </a>
            </li>
            <li>
                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS">
                    <img src="/img/css3.svg" alt="CSS 3">
                </a>
            </li>
        </ol>
    </section>
    <section>
        <p>Backend</p>
        <ol>
            <li>
                <a href="https://nodejs.org/en">
                    <img src="/img/nodejs.svg" alt="Node.js">
                </a>
            </li>
            <li>
                <a href="https://mariadb.org/">
                    <img src="/img/mariadb.svg" alt="MariaDB">
                </a>
            </li>
            <li>
                <a href="https://grafana.com/">
                    <img src="/img/grafana.svg" alt="Grafana">
                </a>
            </li>
        </ol>
    </section>
    <section>
        <p>Cloud</p>
        <ol>
            <li>
                <a href="https://www.docker.com">
                    <img src="/img/docker.svg" alt="Docker">
                </a>
            </li>
            <li>
                <a href="https://www.packer.io/">
                    <img src="/img/packer.svg" alt="Packer">
                </a>
            </li>
            <li>
                <a href="https://www.terraform.io/">
                    <img src="/img/terraform.svg" alt="Terraform">
                </a>
            </li>
        </ol>
    </section>
    <section>
        <p>Game Development</p>
        <ol>
            <li>
                <a href="https://godotengine.org/">
                    <img src="/img/godot.svg" alt="Godot Engine">
                </a>
            </li>
            <li>
                <a href="https://www.blender.org/">
                    <img src="/img/blender.svg" alt="Blender">
                </a>
            </li>
        </ol>
    </section>
    <section>
        <p>Miscellaneous</p>
        <ol>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/">
                    <img src="/img/firefox.svg" alt="Mozilla Firefox">
                </a>
            </li>
            <li>
                <a href="https://code.visualstudio.com/">
                    <img src="/img/vscode.svg" alt="Visual Studio Code">
                </a>
            </li>
            <li>
                <a href="https://linuxmint.com/">
                    <img src="/img/linuxmint.svg" alt="Linux Mint">
                </a>
            </li>
        </ol>
    </section>
</section>

<style>
    .skills {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(10rem, 1fr));
        gap: 0.5rem 1rem;
    }

    .skills > header {
        grid-column: 1 / -1;
    }

    .skills section p {
        border-radius: 100px;
        background: var(--gradient-primary);
        padding: 0.25rem 1rem;
        color: white;
        border: 1px solid var(--clr-primary-dark);
    }

    .skills ol {
        user-select: none;
        padding: 0 0.5rem;
    }

    .skills li {
        display: inline-block;
        padding: 0.2rem;
        position: relative;
        top: 0;
        transition: top 200ms;
    }

    .skills li:hover {
        top: -0.2rem;
    }

    .skills li a {
        display: block;
        width: 2rem;
        height: 2rem;
    }

    .skills li img {
        border-radius: 0;
    }
</style>
