<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="/favicon.png">
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/css_import.php") ?>
        <title>404 Not Found</title>
        <link rel="stylesheet" href="css/small-window.css">
    </head>
    <body> 
        <main>
            <section id="websites">
                <h2 class="title">ERROR 404 PAGE NOT FOUND</h2>
                <div class="content">
                    <p class="text">
                        <?php 
                        $response = file_get_contents('api/quotes.txt'); 
                        $response = json_decode($response);
                        $quote = $response[rand(0, 1642)];
                        echo "\"" . $quote->{"text"} . "\"";
                        ?>
                    </p>
                    <p class="italic author">
                        <?php
                        echo "&mdash; " . $quote->{"author"};
                        ?>
                    </p>
                    <br>
                    <a href="/">
                        <input type="button" value="RETURN HOME">
                    </a>
                </div>
            </section>
        </main>
    </body>
</html>