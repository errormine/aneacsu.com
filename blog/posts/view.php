<?php

include "../include/dbh.php";

$id = htmlspecialchars($_GET["id"]);
$query = "SELECT * FROM posts WHERE id='$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

?>

<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/blog/include/blog-head.html") ?>
    <meta property="og:title" content=<?php echo "'" . $row["title"] . "'" ?> />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://aneacsu.com" />
    <meta property="og:image" content=<?php echo "'https://aneacsu.com" . $row["thumb"] . "'" ?> />
    <meta property="og:description" content=<?php echo "'" . $row["description"] . "'" ?> />
    <meta name="theme-color" content="#81ace0">
    <meta name="twitter:card" content="summary_large_image">
    <title>
        <?php echo $row['title']; ?>
    </title>
</head>
<body>
    
    <?php include("../include/blog-header.html") ?>
    <div id="body">
        <?php include("../include/blog-nav.html") ?>
        <main>
            <section id=<?php echo "'" . $row["title"] . "'"; ?>>
                <h2 class="title">
                    <?php echo $row["title"]; ?>
                </h2>
                <h4 class="subtitle">
                    <?php echo $row["date"]; ?>
                </h4>
                <?php
                    if (!empty($row["thumb"])) {
                        echo "<div class='large-img'><img src='" . $row["thumb"] . "'><br><a href='" . $row["thumb"] . "' class='img-view-link'>view full size</a></div>";
                    }
                ?>
                <div class="content">
                    <?php echo $row["content"]; ?>
                </div>
            </section>
        </main>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/include/footer.html") ?>
    </div>
    <script src="/js/jquery.js"></script>
    <script>
        $(function () {
            var includes = $('[data-include]')

            $.each(includes, function() {
                var file = $(this).data('include')
                
                $(this).load(file)
            })
        })    
    </script>
</body>
</html>