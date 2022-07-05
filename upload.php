<?php

function createThumb($sourcePath, $destinationPath, $thumbPercent = 0.5)
{
    $sourceImage = imagecreatefromjpeg($sourcePath);
    $width = imagesx($sourceImage);
    $height = imagesy($sourceImage);
    $thumbWidth = floor($width * $thumbPercent);
    $thumbHeight = floor($height * $thumbPercent);
    $thumbImage = imagecreatetruecolor($thumbWidth, $thumbHeight);

    # Get exif information
    $exif = exif_read_data($sourcePath); // FIX THIS https://stackoverflow.com/questions/45963286/php-imagecreatefromjpeg-while-keeping-orientation

    // Copy source image at the new size
    imagecopyresampled($thumbImage, $sourceImage, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $width, $height);

    # Rotate new image to match old one
    switch ($exif['Orientation']) {
        case 2:
            imageflip($thumbImage, IMG_FLIP_HORIZONTAL);
            break;
        case 3:
            $thumbImage = imagerotate($thumbImage, 180, 0);
            break;
        case 4:
            imageflip($thumbImage, IMG_FLIP_VERTICAL);
            break;
        case 5:
            $thumbImage = imagerotate($thumbImage, -90, 0);
            imageflip($thumbImage, IMG_FLIP_HORIZONTAL);
            break;
        case 6:
            $thumbImage = imagerotate($thumbImage, -90, 0);
            break;
        case 7:
            $thumbImage = imagerotate($thumbImage, 90, 0);
            imageflip($thumbImage, IMG_FLIP_HORIZONTAL);
            break;
        case 8:
            $thumbImage = imagerotate($thumbImage, 90, 0); 
            break;
    }

    // Create the new image file
    imagejpeg($thumbImage, $destinationPath, 60);
    print("Thumbnail created at " . $destinationPath . "\n");

    // Cleanup
    imagedestroy($sourceImage);
    imagedestroy($thumbImage);
}

function createThumbnails($dirPath)
{
    $dir = array_diff(scandir($dirPath), array(".", ".."));

    foreach ($dir as $photo)
    {
        $exts = ["jpg", "jpeg"];

        // Get photo extension
        $path = $dirPath . "/" . $photo;
        $ext = pathinfo( $path, PATHINFO_EXTENSION );

        if (!in_array(strtolower($ext), $exts)) return;
        
        // Create thumbnail directory if doesn't exist
        if (!is_dir($dirPath . "thumbnails")) mkdir($dirPath . "thumbnails");

        // Generate the thumbnail path
        $thumbPath = $dirPath . "thumbnails/thumb_" . $photo;

        if (!file_exists($thumbPath))
        {
            createThumb($path, $thumbPath, 0.2);
        }
        else
        {
            echo("Thumbnail exists: " . $thumbPath . "\n");
        }
    }
}

if (!isset($_POST['submit'])) return;
if (!password_verify($_POST['password'], "$2y$10$2nPZ/sIWY.ccSVhfiPcTd.CLfs238jRuYCs1tqFIyTasE26itD14y")) return;

$uploadDir = "photos/" . $_POST['albumName'] . "/";

if (!is_dir($uploadDir)) mkdir($uploadDir);

$count = count($_FILES['images']['name']);

for ($i = 0; $i < $count; $i++)
{
    $fileName = $_FILES['images']['name'][$i];
    $tempName = $_FILES['images']['tmp_name'][$i];

    move_uploaded_file($tempName, $uploadDir . $fileName);
}

createThumbnails($uploadDir);

header("Location: /photos/");