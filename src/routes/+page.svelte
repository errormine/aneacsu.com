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
    <h2>Welcome</h2>
    <p>I'm a student in Chicago, IL. I'm also a developer, amateur photographer, and artist. I'm currently interested in video game development, and would love to share some games with you. Honestly, I have no clue what I'm doing!</p>
    <p><a href="/about" class="float-right">About &rarr;</a></p>
</section>
<section>
    <h2>Projects</h2>
    <p>I'm currently busy finishing up my education, however, I try to create as much as I can in my free time. Here you can find various thing I've worked on and released to the public. Some of them are finished, some of them aren't. </p>
    <p><a href="/projects" class="float-right">Projects &rarr;</a></p>
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
    .blog-posts {
        display: grid;
        gap: 0.5rem;
        list-style-type: none;
        padding: 0;
    }
</style>
