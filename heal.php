<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'css_import.php' ?>
    <title>h e a l</title>
    <link rel="stylesheet" href="css/heal.css">
</head>
<body>
    <div>
        <button onclick="document.getElementById('heal').play();">WILL YOU LISTEN?</button>
        <audio id="heal" preload="auto" loop>
            <source src="/audio/BGM_011.ogg" type="audio/ogg">
            <source src="/audio/kikiyama.mp3" type="audio/mpeg">
        </audio>
    </div>
</body>
</html>