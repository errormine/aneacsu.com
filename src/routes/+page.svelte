<script>
    /** @type {import('./$types').PageData} */
    export let data;
</script>

<svelte:head>
    <title>Andrei Neacsu</title>
</svelte:head>

<section>
    <h2>About</h2>
    <p>I'm a student in Chicago, IL. I'm also a developer, amateur photographer, and artist. I'm currently interested in video game development, and would love to share some games with you.</p>
    <p>Honestly, I have no clue what I'm doing!</p>
</section>
<section>
    <h2>Contact</h2>
    <p>Feel free to reach out to me here:</p>
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
<section class="links-wrapper">
    <section class="links">
        <h2>Links</h2>
        <ul>
            <li>
                <a href="/projects">Projects</a>
            </li>
            <li>
                <a href="/gallery">Gallery</a>
            </li>
            <li>
                <a href="/resume">Resume</a>
            </li>
        </ul>
    </section>
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

<style>
    .links-wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    .blog-posts {
        display: grid;
        gap: 0.5rem;
        list-style-type: none;
        padding: 0;
    }

    .bubbles {
        list-style-type: none;
        display: flex;
        gap: 1rem;
    }

    .bubbles li a {
        position: relative;
        background: var(--gradient-primary);
        color: white;
        border: 1px solid var(--clr-primary-dark);
        padding: 0.2rem 1rem;
        border-radius: 100px;
        top: 0;
        transition: top 200ms;
    }

    .bubbles li a:hover {
        text-decoration: none;
        top: -0.25rem;
    }
</style>
