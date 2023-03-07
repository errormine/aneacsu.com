---
title: BLOG
permalink: "blog"
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
    <meta property="og:description" content="My blog... contains writings about various things.">
    <meta property="og:image" content="/favicon.ico">
</head>
<body id="index">
    <header>
        <nav>
            <h3>
                <a href="/">Andrei Neacsu</a>
            </h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/blog/">Blog</a>
                </li>
                <li>
                    <a href="/photos/">Photography</a>
                </li>
            </ul>
        </nav>
        <hr>
    </header>
    <main id="blog">
        <section>
            <header>
                <h1>{{ page.title }}</h1>
            </header>
            {% for post in site.posts %}
            <article class="post">
                <header>
                    <h2>{{ post.title }}</h2>
                    <h4><i>{{ post.date | date: "%-d&nbsp;%B&nbsp;%Y" }}</i></h4>
                </header>
                <p>{{ post.excerpt | markdownify }}</p>
                <p class="read-more"><a href="{{ post.url }}">Continue Reading...</a></p>
                <hr>
            </article>
            {% endfor %}
        </section>
    </main>
    <footer>
        Created with love for the web.
    </footer>
    <script data-goatcounter="https://aneacsu.goatcounter.com/count" async src="//gc.zgo.at/count.js"></script>
</body>
</html>