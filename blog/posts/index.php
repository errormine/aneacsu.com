<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/blog/include/blog-head.html") ?>
    <title>posts</title>
</head>
<body>
    <?php include("../include/blog-header.html") ?>
    <div id="body">
        <?php include("../include/blog-nav.html") ?>
        <main>
            <section id="posts">
                <h2 class="title">
                    posts
                </h2>
                <div class="content">
                    <ul class="word-list">
                        <?php include "../include/get_posts_list.php" ?>
                    </ul>
                </div>
            </section>
        </main>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/include/footer.html") ?>
    </div>
</body>
</html>