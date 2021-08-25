<?php include($_SERVER['DOCUMENT_ROOT'] . "/courses/assets/include/courses-head.html") ?>
<title>Basic Website</title>
</head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/courses/assets/include/courses-header.html") ?>
        <main>
            <section id="project-structure">
                <h2 class="title">Project Structure</h2>
                <div class="content">
                    <p>
                        Create a new folder somewhere easily accessible and call it whatever you would like.
                        Next inside that folder create a new file called <code>index.html</code>, it should look something like this:
                    </p>
                    <div class="large-img">
                        <a href="/courses/web-dev/assets/lesson03/images/001.jpg">
                            <img src="/courses/web-dev/assets/lesson03/images/001.jpg" alt="My First Folder > index.html">
                        </a>
                    </div>
                    <p>
                        Next we will go ahead an open that folder.
                    </p>
                    <p>
                        If you are using Atom it is File > Open Folder...
                    </p>
                    <p>
                        If you aren't using Atom you can just open <code>index.html</code> in whatever editor you are using.
                    </p>
                </div>
            </section>
            <section id="first-page">
                <h2 class="title">First HTML Page</h2>
                <div class="content">
                    <p>
                        Inside <code>index.html</code> write out the following code:
                    </p>
                    <pre><code data-include="/courses/web-dev/assets/lesson03/html/01.html"></code></pre>
                    <p>
                        As we discussed before, every HTML document must begin with the document type declaration. <code>&lt;!DOCTYPE html></code>
                    </p>
                    <p>
                        All the HTML code is written inside of the <code>&lt;html></code> tags.
                    </p>
                    <p>
                        The <code>lang</code> attribute inside the first <code>&lt;html></code> tag is used to specify that our page is in English.
                    </p>
                    <p>
                        The <code>&lt;title></code> tags is used to specify the title of our webpage. Other tags can be used inside the <code>&lt;head></code> tag to specify more information about your webpage, but we will go over those later.
                    </p>
                    <p>
                        Everything inside of the <code>&lt;body></code> tags is what is actually visible on the webpage. We will add some tags inside the body right now:
                    </p>
                    <pre><code data-include="/courses/web-dev/assets/lesson03/html/02.html"></code></pre>
                    <p>
                        The <code>&lt;h1></code> tag creates a heading, and there are different sized headings from h1 to h6.
                    </p>
                    <p>
                        The <code>&lt;p></code> tag is used to create a paragraph.
                    </p>
                    <p>
                        You should now be able to see something on your page. It should look similar to this:
                    </p>
                    <div class="large-img">
                        <a href="/courses/web-dev/assets/lesson03/images/002.jpg">
                            <img src="/courses/web-dev/assets/lesson03/images/002.jpg" alt="">
                        </a>
                    </div>
                    <p>
                        On the next page you can find some of the most common HTML tags to add different types of content to your page.
                    </p>
                    <p>
                        Get creative and add some interesting stuff to yours!
                    </p>
                </div>
            </section>
            <ul id="lesson-nav">
                <li class="previous">
                    <a href="/courses/web-dev/lesson02.php">&lt; Page 2: Text Editors</a>
                </li>
                <li class="next">
                    <a href="/courses/web-dev/lesson04.php">Page 4: Common Tags ></a>
                </li>
            </ul>
        </main>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/include/footer.html") ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/courses/assets/include/scripts.html") ?>
    </body>
</html>