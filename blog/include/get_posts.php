<?php

include "dbh.php";

$query = "SELECT * FROM posts ORDER BY date DESC";
$url = "/blog/posts/view.php?id=";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["published"] == 1) {
            $section = "<section id='" . $row["title"] . "'>
                <h2 class='title'><a href='" . $url . $row["id"] . "'>" . $row["title"] ."</a></h2>
                <h4 class='subtitle'>" . $row["date"] . "</h4>";

            if (!empty($row["thumb"])) {
                $section .= "<div class='large-img'><img src='" . $row["thumb"] . "'><br><a href='" . $row["thumb"] . "' class='img-view-link'>view full size</a></div>";
            }

            $section .= "<div class='content'>" . $row["content"] . "</div>
            </section>";

            echo $section;
        }
        
    }
} else {
    echo "0 results found";
}

mysqli_close($conn);