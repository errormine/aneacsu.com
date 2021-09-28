<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'css_import.php' ?>
    <title>h e a l</title>
    <style>
        body, html {
            background: #000 url('/images/bg_dark_anim_0_08.gif');
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
        }

        div {
            margin: 0 auto;
        }

        button {
            width: 100%;
            font-size: 128px;
            color: #d2738a;
            background: none;
            border: none;
            cursor: pointer;
        }

        button:hover {
            color: #e4acba;
        }
    </style>
</head>
<body>
    <div>
        <button onclick="document.getElementById('heal').play();">ああああああああ</button>
        <audio id="heal" preload="auto" loop>
            <source src="/audio/BGM_011.ogg" type="audio/ogg">
            <source src="/audio/kikiyama.mp3" type="audio/mpeg">
        </audio>
    </div>
</body>
</html>