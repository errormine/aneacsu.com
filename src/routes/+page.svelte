<script>
    /** @type {import('./$types').PageData} */
    export let data;
</script>

<svelte:head>
    <title>Andrei Neacsu</title>
</svelte:head>

<section>
    <h2>About</h2>
    <p>I'm a student in Chicago, IL. I'm also a developer, amateur photographer, and artist. I'm currently interested in video game development, and would love to share some games with you. Honestly, I have no clue what I'm doing! I'm just trying to make fun stuff and learn as much as I can along the way.</p>
    <p>Social links: </p>
    <ul class="bubbles">
        <li>
            <a href="mailto:andrei@aneacsu.com">Email</a>
        </li>
        <li>
            <a href="https://github.com/prycaustic">GitHub</a>
        </li>
        <li>
            <a rel="me" href="https://infosec.exchange/@errormine">Mastodon</a>
        </li>
    </ul>
</section>
<section>
    <h2>Blog</h2>
    <ul class="blog-posts">
        {#each data.posts.slice(0, 5) as post}
            <li class="flex space-between align-center">
                <a href={"/blog/"+post.slug}>{post.metadata.title}</a>
                <span>{post.metadata.date}</span>
            </li>
        {/each}
        <li>
            <a href="/blog" class="float-right">Previous posts &rarr;</a>
        </li>
    </ul>
</section>
<section>
    <h2>Projects</h2>
    <p>Various projects which I've worked on over the years. Some are finished, some are not.</p>
    <ol>
        <li>
            <strong class="float-right">2024</strong> <a href="https://github.com/prycaustic/plica-garden">Plica Garden</a>
            <p>VERY simple web front-end for notes / images / other media. Made using Python Flask and vanilla JS.</p>
        </li>
        <li>
            <strong class="float-right">2023</strong> <a href="https://github.com/SlopCrew/SlopCrew">SlopCrew</a>
            <p>It's a Bomb Rush Cyberfunk multiplayer mod. Skate around with your friends. Originally created by <a href="https://notnite.com/">notnite</a></p>
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
            <p>Bring life to an empty planet. Very basic sandbox game which grows as you play it. This was created for the first ever Experimental Game Jam "Grid". I wanted to make something very simple that would develop around your actions. It's a bit unfinished since I ran out of time, but I'm hoping to keep learning and make more!</p>
        </li>
        <li>
            <strong class="float-right">2023</strong><a href="https://errormine.itch.io/boing">Boing!</a>
            <p>Jump on a trampoline for as long as you can. This is a crappy clone of the WarioWare mini-game of the same name. It's the first thing I created using Godot 3.5, and I think it's pretty cute.</p>
        </li>
        <li>
            <strong class="float-right">2021</strong><a href="https://errormine.net/">errormine.net</a>
            <p>My own little page on Neocities! I discovered this place while trying to solve some silly ARG. I've met some great friends on there since then.</p>
        </li>
        <li>
            <strong class="float-right">2019</strong> <a href="https://github.com/prycaustic/bent-bot">bent-bot</a>
            <p>A really terrible Discord bot written with Java which I made in high school. It is mildly embarassing.</p>
        </li>
    </ol>
</section>


<style>
    .blog-posts {
        display: grid;
        gap: 0.5rem;
        list-style-type: none;
        padding: 0;
    }

    .bubbles {
        display: flex;
        gap: 1rem;
        list-style-type: none;
    }
    
    .bubbles li a {
        display: block;
        position: relative;
        background: var(--gradient-primary);
        color: white;
        border: 1px solid var(--clr-primary-dark);
        padding: 0.2rem 1rem;
        border-radius: 100px;
        top: 0;
        transition: top 200ms;
    }

    .bubbles li a:hover,
    .bubbles li a:focus {
        text-decoration: none;
        top: -0.2rem;
    }
</style>
