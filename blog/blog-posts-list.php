<?php 
$description = "This blog is about random stuff that I want to write about. You may or may not find it interesting.";
include $_SERVER['DOCUMENT_ROOT'] . "/include/head.php"; 
?>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/header.html'; ?>
        <main class="blog">
            <section id="description">
                <h2 class="title">blog</h2>
                <div class="content">
                    <p><?php echo $description; ?></p>
                </div>
            </section>
            <?php include 'postListRenderer.php'; ?>
        </main>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/footer.html'; ?>
    </body>
</html>
