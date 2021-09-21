<?php
$conn = new mysqli("localhost", "anon", "anon", "aneacsu.com");
$result = "Error: Something has gone wrong. You may have typed an illegal character.<br><br>Redirecting in 5 seconds.";

if ($conn->error)
{
    die("Connection failed: " . $conn->$error);
}

if (isset($_POST["name"]) && isset($_POST["comment"]))
{
    $name =  filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $comment = filter_var($_POST["comment"], FILTER_SANITIZE_STRING);

    $sql = "INSERT INTO Guestbook VALUES (NULL, '$name', '$comment', DEFAULT)";

    if ($conn->query($sql) === TRUE)
    {
        $result = "Thank you for signing.";
    }
}

$conn->close();
header("Refresh: 5; URL=guestbook");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="/favicon.png">
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/css_import.php") ?>
        <title>POST</title>
        <style>
            html {
                height: 100%;
                display: flex;
                align-items: center;
                height: 100%;
            }

            body {
                width: 40%;
            }
        </style>
    </head>
    <body> 
        <main>
            <section id="websites">
                <h2 class="title">POST</h2>
                <div class="content" style="text-align: center;">
                    <p>
                        <?php echo $result; ?>
                    </p>
                </div>
            </section>
        </main>
    </body>
</html>