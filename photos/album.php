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
    ?>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/lightbox.css">
    <title><?php echo $albumName; ?></title>
</head>
<body>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/include/header.html"); ?>
    <main>
        <section>
            <h1><?php echo $albumName; ?></h1>
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
                            <a href="<?php echo $path; ?>">
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
    <script type="text/javascript" src="/assets/js/lightbox.js"></script>
</body>
<?php
}
?>
</html>