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
            background: #000 url('/images/bg_nerves02.gif');
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
            z-index: 1;
            font-family: serif;
        }

        button:hover {
            color: #e4acba;
        }

        .bob {
            position: absolute;
            top: 50%;
            left: 80%;
            animation: AnimBob 5s infinite;
            opacity: 0.08;
        }
    </style>
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