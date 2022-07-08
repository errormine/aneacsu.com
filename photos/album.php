<?php

// Check for an album name
$name = $_GET["name"];
$dirName = isset($name) ? htmlspecialchars($name) : null;
$path = isset($dirName) ? "./" . $dirName . "/" : ".";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php

    // Search the specified directory for files
    if (is_dir($path))
    {
        $dir = array_diff(scandir($path), array(".", "..")); // remove dots from array
    }
    else
    {
        header("Location: /not_found.php");
    }

    // Show directory listing if no album is specified
    if (is_dir($path) && !empty($dir)) 
    {
        $albumName = substr(ucwords(str_replace("-", " ", $dirName)), 11);

        // Check for album description
        $description = "This album has no description.";
    ?>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/glightbox.min.css">
    <title><?php echo $albumName; ?></title>

    <!-- meta tags-->
    <meta property="theme-color" content="#e0d5c9">
    <meta property="og:site_name" content="Andrei Neacsu">
    <meta property="og:title" content="<?php echo $albumName; ?>">
    <meta property="og:description" content="<?php echo substr($description, 0, 48) . "..."; ?>">
    <meta property="og:image" content="<?php echo "/photos/" . $dirName . "/thumbnails/thumb_" . scandir($path)[2]; ?>">
    <meta name="twitter:card" content="summary_large_image">
</head>
<body>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/include/header.html"); ?>
    <main>
        <section>
            <h1><?php echo $albumName; ?></h1>
            <p><?php echo $description; ?></p>
            <ul id="album">
            <?php
                foreach ($dir as $photo) 
                {
                    $exts = ["jpg", "jpeg", "png", "webp", "gif"];

                    // Get photo extension
                    $path = $dirName . "/" . $photo;
                    $ext = pathinfo( $path, PATHINFO_EXTENSION );

                    if (in_array(strtolower($ext), $exts ))
                    {
                        // Get the thumbnail
                        $thumb = $dirName . "/thumbnails/thumb_" . $photo;

                        // Output image link
                        ?>
                        <li style="--aspect-ratio: <?php list($width, $height) = getimagesize($thumb); echo ($width > $height) ? "2/1;" : "1/2;"; ?>">
                            <a href="<?php echo $path; ?>" class="glightbox">
                                <img src="<?php echo $thumb; ?>" alt="" />
                            </a>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </section>
    </main>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/assets/include/photo-footer.php'); ?>
    <script type="text/javascript" src="/assets/js/glightbox.min.js"></script>
    <script type="text/javascript">
        const lightbox = GLightbox({
            preload: true,
            openEffect: "fade",
            touchNavigation: true,
            loop: true
        });
    </script>
    <script data-goatcounter="https://aneacsu.goatcounter.com/count" async src="//gc.zgo.at/count.js"></script>
</body>
<?php
}
?>
</html>