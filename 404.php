<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="/favicon.png">
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/css_import.php") ?>
        <title>404 Not Found</title>
        <style>
            html {
                height: 100%;
                display: flex;
                align-items: center;
            }

            body {
                width: 40%;
            }
        </style>
    </head>
    <body> 
        <main>
            <section id="websites">
                <h2 class="title">ERROR 404 PAGE NOT FOUND</h2>
                <div class="content" style="text-align: center;">
                    <p style="font-style: italic;">
                        <?php 
                        $response = file_get_contents('http://api.quotable.io/random'); 
                        $response = json_decode($response);
                        echo "\"" . $response->{'content'} . "\"";
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