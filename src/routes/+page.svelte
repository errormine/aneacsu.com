<script>
    /** @type {import('./$types').PageData} */
    export let data;
</script>

<svelte:head>
    <meta property="og:title" content="Andrei Neacsu">
    <meta property="og:description" content="I'm a student in Chicago, IL. I'm also a developer, amateur photographer, and artist. I'm currently interested in video game development, and would love to share some games with you. Honestly, I have no clue what I'm doing!">

    <title>Andrei Neacsu</title>
</svelte:head>

<section>
    <h2>About</h2>
    <p>I'm a student in Chicago, IL. I'm also a developer, amateur photographer, and artist. I'm currently interested in video game development, and would love to share some games with you. Honestly, I have no clue what I'm doing!</p>
</section>
<section class="projects">
    <header>
        <h2>Projects</h2>
        <p>Various projects which I've worked on over the years.</p>
    </header>
    <ol>
        <li>
            <strong class="float-right">2024</strong> <a href="#">Viewfinder</a>
            <p>A social image-sharing website created for my senior capstone course. Built with SvelteKit, MariaDB, and lucia.</p>
        </li>
        <li>
            <strong class="float-right">2024</strong> <a href="https://github.com/prycaustic/plica-garden">Plica Garden</a>
            <p>VERY simple web front-end for notes / images / other media. Made using Python Flask and vanilla JS.</p>
        </li>
        <li>
            <strong class="float-right">2023</strong> <a href="https://github.com/SlopCrew/SlopCrew">SlopCrew</a>
            <p>It's a Bomb Rush Cyberfunk multiplayer mod. Skate around with your friends. Originally created by <a href="https://notnite.com/">notnite</a>.</p>
        </li>
        <li>
            <strong class="float-right">2023</strong><a href="https://errormine.itch.io/the-library-of-babel">The Library of Babel</a>
            <p>A small puzzle game inspired by the short story by Jorge Luis Borges. Explore the halls of the Universe and solve puzzles that lead to ???</p>
        </li>
        <li>
            <strong class="float-right">2023</strong><a href="https://errormine.itch.io/lunar-lander">Lunar Lander</a>
            <p>A very simple game made in a few days where you have to land a space craft on the moon.</p>
        </li>
        <li>
            <strong class="float-right">2023</strong><a href="https://errormine.itch.io/creoterra">Creoterra</a>
            <p>Bring life to an empty planet. Very basic sandbox game which grows as you play it.</p>
        </li>
        <li>
            <strong class="float-right">2023</strong><a href="https://errormine.itch.io/boing">Boing!</a>
            <p>Jump on a trampoline for as long as you can.</p>
        </li>
        <li>
            <strong class="float-right">2021</strong><a href="https://errormine.net/">errormine.net</a>
            <p>My own little page on Neocities!</p>
        </li>
        <li>
            <strong class="float-right">2019</strong> <a href="https://github.com/prycaustic/bent-bot">bent-bot</a>
            <p>A really terrible Discord bot written with Java which I made in high school.</p>
        </li>
    </ol>
</section>
<section>
    <h2>Blog</h2>
    <ol class="blog-posts">
        {#each data.posts.slice(0, 5) as post}
            <li class="flex space-between align-center">
                <a href={"/blog/"+post.slug}>{post.metadata.title}</a>
                <span>{post.metadata.date}</span>
            </li>
        {/each}
        <li>
            <a href="/blog" class="float-right">Previous posts &rarr;</a>
        </li>
    </ol>
</section>

<style>
    .projects ol {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    .projects li {
        padding: 0.5rem;
        border: 1px solid var(--clr-primary);
        border-radius: 0.5rem;
    }

    .blog-posts {
        display: grid;
        gap: 0.5rem;
        list-style-type: none;
        padding: 0;
    }
</style>
