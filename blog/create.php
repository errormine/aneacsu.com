<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/blog/include/blog-head.html") ?>
    <title>create post</title>
</head>
<body>
    <?php include ("include/blog-header.html") ?>
    <div id="body">
        <main>
            <section id="new-post">
                <h2 class="title">
                    create a post
                </h2>
                <div class="content">
                    <form action="include/new_post.php" method="POST" target="_parent">
                        <label for="title">title</label><br>
                        <input type="text" id="title" name="title"><br>
                        <label for="content">content</label><br>
                        <textarea name="content" id="content" cols="50" rows="10"></textarea><br>
                        <label for="published">publish? (1 or 0)</label><br>
                        <input type="text" id="published" name="published"><br>
                        <label for="thumb">thumb</label><br>
                        <input type="text" id="thumb" name="thumb"><br>
                        <label for="description">description</label><br>
                        <input type="text" id="description" name="description"><br>
                        <label for="user">user</label><br>
                        <input type="text" id="user" name="user"><br>
                        <label for="pass">password</label><br>
                        <input type="password" id="pass" name="pass"><br>
                        <input type="submit" value="submit">
                    </form>
                </div>
            </section>
        </main>
    </div>
</body>
</html>