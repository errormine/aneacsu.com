<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.png">
    <?php 
    include($_SERVER['DOCUMENT_ROOT'] . "/css_import.php");

    function getTitle() {
        $pageName = ucfirst(basename($_SERVER["REQUEST_URI"], ".php"));
        if (strlen($pageName) > 0) {
            echo $pageName . " - ";
        }
        echo "Andrei Neacsu";
    }
    ?>

    <!-- HTML Meta Tags -->
    <title><?php getTitle() ?></title>
    <meta name="description" content="<?php echo $description = isset($description) ? $description : "Welcome to my website. Here you can find my blog as well some stuff that I'm interested in."; ?>">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://aneacsu.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php getTitle() ?>">
    <meta property="og:description" content="<?php echo $description; ?>">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="aneacsu.com">
    <meta property="twitter:url" content="https://aneacsu.com/">
    <meta name="twitter:title" content="<?php getTitle() ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
</head>