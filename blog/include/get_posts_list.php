<?php

include "dbh.php";

$query = "SELECT * FROM posts ORDER BY date DESC";
$url = "/blog/posts/view.php?id=";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["published"] == 1) {
            echo "<li>" . $row["date"] . " <a href='" . $url . $row["id"] . "'>" . $row["title"] . "</a></li>";
        }
    }
} else {
    echo "0 results found";
}

mysqli_close($conn);