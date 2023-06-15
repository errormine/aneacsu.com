---
title: ARCHIVE
permalink: "/archive/"
---

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>{{ page.title }} - {{ site.title }}</title>

    <!-- meta tags-->
    <meta property="theme-color" content="#e0d5c9">
    <meta property="og:title" content="{{ page.title }} - {{ site.title }}">
    <meta property="og:description" content="Archive of all the stuff I've made.">
    <meta property="og:image" content="/favicon.ico">
</head>
<body id="index">
    {% include header.html %}
    <main id="blog">
        <section>
            <header>
                <h1>{{ page.title }}</h1>
            </header>
            <article>
                <h2>Photography</h2>
                <p></p>
                <p>Visit the <a href="/photos/">Photography</a> page to view a gallery of my work.</p>
                <hr>
            </article>
            <article>
                <h2>Video Games</h2>
                <ol>
                    <li>
                        <a href="https://experimentaljams.com/game/?id=49">Creoterra</a>
                        <p>Bring life to an empty planet. Very basic sandbox game which grows as you play it. This was created for the first ever Experimental Game Jam "Grid". I wanted to make something very simple that would develop around your actions. It's a bit unfinished since I ran out of time, but I'm hoping to keep learning and make more!</p>
                    </li>
                    <li>
                        <a href="https://errormine.itch.io/boing">Boing!</a>
                        <p>Jump on a trampoline for as long as you can. This is a crappy clone of the WarioWare mini-game of the same name. It's the first thing I created using Godot 3.5, and I think it's pretty cute.</p>
                    </li>
                </ol>
                <hr>
            </article>
        </section>
    </main>
    <footer>
        Created with love for the web.
    </footer>
    <script type="text/javascript" src="/photos/js/glightbox.min.js"></script>
    <script type="text/javascript">
        const lightbox = GLightbox({
            preload: true,
            openEffect: "fade",
            touchNavigation: true,
            loop: true
        });
    </script>
    <script data-goatcounter="https://aneacsu.goatcounter.com/count" async src="//gc.zgo.at/count.js"></script>
</body>
</html>