<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="/favicon.png">
        <title>Andrei Neacsu Blog</title>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/css_import.php'; ?>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/header.html'; ?>
        <main class="blog">
            <?php include 'postListRenderer.php'; ?>
        </main>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/footer.html'; ?>
    </body>
</html>
