<?php
/**
 * Loads the markdown file given in the ?page query param into $markdown.
 */
require_once 'postRenderer.php';
$postSlug = $_GET['page'];
$page = 'posts/' . $postSlug;
if (file_exists($page)) {
    $markdown = file_get_contents($page);
    $pageTitle = getPostTitle($markdown);
} else {
    $markdown = "# 404 <br/> Post '$postSlug' not found 😢 ";
    $pageTitle = 'Blog post not found!';
}
$blog = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.png">
    <title><?php echo $pageTitle ?></title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/css_import.php'; ?>
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/header.html'; ?>
    <main class="blog">
        <section class='markdown'>
                <?php echo renderMarkdown($markdown); ?>
        </section>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/include/footer.html") ?>
</body>
</html>
