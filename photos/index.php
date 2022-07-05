<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Gallery | Andrei Neacsu</title>
</head>
<body id="gallery">
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/assets/include/header.html'); ?>
    <main>
        <section>
            <h1>GALLERY</h1>
            <p>Click any thumbnail to view the photos in that album.</p>
            <ul id="listing">
                <?php
                // Search for albums
                $dir = array_diff(scandir(".", SCANDIR_SORT_DESCENDING), array(".", "..")); // remove dots from array
                
                foreach($dir as $album) 
                {
                    if (is_dir($album)) 
                    {
                        $albumName = ucwords(str_replace("-", " ", $album));

                        ?>
                        <li>
                            <a href="/photos/album.php?name=<?php echo $album; ?>">
                                <img class="album-thumbnail" src="<?php echo "/photos/" . $album . "/thumbnails/thumb_" . scandir($album)[2]; ?>" alt="">
                                <p class="album-name"><?php echo substr($albumName, 11); ?></p>
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
</body>
</html>