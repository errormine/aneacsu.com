<?php
$conn = new mysqli("localhost", "anon", "anon", "aneacsu.com");

if ($conn->error)
{
    die("Connection failed: " . $conn->$error);
}

$name =  filter_var($_POST["name"], FILTER_SANITIZE_STRING);
$comment = filter_var($_POST["comment"], FILTER_SANITIZE_STRING);
$sql = "INSERT INTO Guestbook VALUES (NULL, '" . $name . "', '" . $comment . "', DEFAULT)";

if ($conn->query($sql) === TRUE)
{
    $result = "Thank you for signing.";
}
else
{
    $result = "Error: " . $sql . "<br>" . $conn_error;
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
        <link rel="stylesheet" href="/style/reset.css">
        <link rel="stylesheet" href="/style/style.css">
        <title>404 Not Found</title>
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