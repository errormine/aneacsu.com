<?php include($_SERVER['DOCUMENT_ROOT'] . "/courses/assets/include/courses-head.html") ?>
<title>HTML Introduction</title>
</head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/courses/assets/include/courses-header.html") ?>
        <div id="body">
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/courses/assets/include/courses-nav.html") ?>
            <main>
                <section id="intro">
                    <h2 class="title">HTML Introduction</h2>
                    <div class="content">
                        <p>HTML stands for HyperText Markup Language and was created in the early 90s by Tim Berners-Lee. It is NOT a programming language. HTML is the standard language that all webpages use to display content. It describes the structure of your web page. In this course we will be using <a href="https://en.wikipedia.org/wiki/HTML5">HTML5.</a></p>
                        <p>Every HTML file we create will end with the <code>.html</code> file extension. When naming your files you cannot use any spaces or special characters. Short and clear filenames are often better.</p>
                    </div>
                </section>
                <section>
                    <h2 class="title">Anatomy of an HTML Element</h2>
                    <div class="content">
                        <p>An HTML element is defined by a start tag, some content, and an end tag:</p>
                        <pre><code>&lt;h1>My First Heading&lt;/h1></code></pre>
                        <p><code>&lt;h1></code> is the starting tag and <code>&lt;/h1></code>  is the closing tag. An element is everything from the starting tag to the closing tag. Everything inside the tags is the content of the element.</p>
                    </div>
                </section>
                <section>
                    <h2 class="title">Basic HTML5 Structure</h2>
                    <div class="content">
                        <p>There are 4 main components to a proper HTML5 skeleton structure.</p>
                        <p>
                        A doctype declaration – to let the browser know the type of document.<br>
                        An HTML root element.<br>
                        A head section with information describing the page.<br>
                        A body section for the part of the web page the user will see. This contains all the content.
                        </p>
                        <p>All pages should have this basic structure.</p>
                        <pre><code data-include="/courses/web-dev/assets/lesson01/html/skeleton.html"></code></pre>
                    </div>
                </section>
            </main>
            <div id="footer">
                <section>
                    <ul id="lesson-nav">
                        <li class="previous">
                            <a href="/courses/web-dev/">&lt; Page 0: Home</a>
                        </li>
                        <li class="next">
                            <a href="/courses/web-dev/lesson02.php">Page 2: Text Editors ></a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/courses/assets/include/scripts.html") ?>
    </body>
</html>