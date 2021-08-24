<?php include($_SERVER['DOCUMENT_ROOT'] . "/courses/assets/include/courses-head.html") ?>
<title>Common HTML Elements</title>
</head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/courses/assets/include/courses-header.html") ?>
        <main>
            <section id="common-elements">
                <h2 class="title">Common HTML Elements</h2>
                <div class="content">
                    <p>
                        On this page you will find a list of many very common elements.
                    </p>
                    <h2 class="content-h2">Headings</h2>
                    <p>
                        There are six different heading tags which all have different sizes by default.
                    </p>
                    <pre><code>&lt;h1>Heading 1&lt;/h1><br>&lt;h2>Heading 2&lt;/h2><br>...<br>&lt;h6>Heading 6&lt;/h6></code></pre>
                    <h2 class="content-h2">Paragraph</h2>
                    <p>
                        This is probably the most common tag and it is used for most of the text content on your web pages.
                    </p>
                    <pre><code>&lt;p>This is a paragraph.&lt;/p></code></pre>
                    <h2 class="content-h2">Link</h2>
                    <p>
                        The <code>&lt;a></code> tag allows you to define a link that takes the user to another page.
                    </p>
                    <p>
                        The <code>href</code> attribute points to the specific link.
                    </p>
                    <pre><code>&lt;a href="page.html">This is a clickable link.&lt;/a></code></pre>
                    <h2 class="content-h2">Image</h2>
                    <p>
                        The <code>&lt;img></code> tag allows you to add images to your page.
                    </p>
                    <pre><code>&lt;img src="image.png" alt="Description of your image"></code></pre>
                    <h2 class="content-h2">Division</h2>
                    <p>
                        The <code>&lt;div></code> tag is very useful for grouping elements together and keeping them organized. We will use this more later on when we start changing how the content of our page looks.
                    </p>
                    <pre><code>&lt;div>
&lt;h1>This divider has some elements in it.&lt;/h1>
&lt;p>Hello!&lt;/p>
/div></code></pre>
                    <h2 class="content-h2">Emphasis and Italics</h2>
                    <p>
                        With these tags you can add different styles to your text.
                    </p>
                    <pre><code>&lt;em>This text is emphasized&lt;/em> and &lt;i>this text is italic.&lt;/i></code></pre>
                </div>
            </section>
            <section id="empty-elements">
                <h2 class="title">Empty Elements</h2>
                <div class="content">
                    <p>
                        These are special elements that do not need closing tags. These are the exception and almost all other tags need a closing tag!
                    </p>
                    <h2 class="content-h2">Line Break</h2>
                    <p>
                        The <code>&lt;br></code> tag is used to break to the next line on the page.
                    </p>
                    <pre><code>&lt;p>This paragraph has a line &lt;br> break in it.&lt;/p></code></pre>
                </div>
            </section>
            <section id="element-reference">
                <h2 class="title">Full HTML Element Reference</h2>
                <div class="content">
                    <p>
                    If you are curious and would like to see a complete list of HTML tags visit the W3Schools <a href="https://www.w3schools.com/tags/default.asp">HTML Element Reference.</a>
                    </p>
                </div>
            </section>
            <section id="example">
                <h2 class="title">Example Page</h2>
                <div class="content">
                    <p>
                        I have created an example page using the elements mentioned here, I recommend you try using them yourself first and then look at my example for some more ideas.
                    </p>
                    <p>
                        Here is what the page looks like:
                    </p>
                    <img src="/courses/web-dev/assets/lesson04/images/01.jpg" alt="Basic page with more stuff">
                    <p>
                        Here is the HTML code for it:
                    </p>
                    <pre><code data-include="/courses/web-dev/assets/lesson04/html/01.html"></code></pre>
                </div>
            </section>
            <ul id="lesson-nav">
                <li class="previous">
                    <a href="/courses/web-dev/lesson03.php">&lt; Page 3: Basic Website</a>
                </li>
                <li class="next">
                    <a href="/courses/web-dev/lesson05.php">Page 5:  ></a>
                </li>
            </ul>
        </main>
        <footer></footer>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/courses/assets/include/scripts.html") ?>
    </body>
</html>