<?php include($_SERVER['DOCUMENT_ROOT'] . "/courses/assets/include/courses-head.html") ?>
<title>Web Development</title>
</head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/courses/assets/include/courses-header.html") ?>
        <div id="body">
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/courses/assets/include/courses-nav.html") ?>
            <main>
                <section id="home">
                    <h2 class="title">Web Development Home</h2>
                    <div class="content">
                        <p>Welcome and thank you for looking at my Web Development Course. It is based on a couple classes I have taken at school and many online resources that I've compiled in the resources tab. This course goes over HTML5 and CSS as well as some JavaScript and will help you get the fundamentals of creating websites mastered.</p>
                        <p>Here you can find links to all the different pages in the this course:</p>
                        <h2 class="content-h2">HTML5</h2>
                        <ul>
                            <li>
                                <a href="lesson01.php">HTML Introduction</a>
                            </li>
                            <li>
                                <a href="lesson02.php">Text Editors</a>
                            </li>
                        </ul>
                        <p>More coming soon...</p>
                    </div>
                </section>
            </main>
            <div id="footer">
                <section>
                    <ul id="lesson-nav">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="next">
                            <a href="/courses/web-dev/lesson01.php">Page 1: HTML Introduction ></a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/courses/assets/include/scripts.html") ?>
    </body>
</html>