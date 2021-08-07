<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

$conn = mysqli_connect("localhost", "$user", "$pass", "biolink");

// kill if there is an error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = mysqli_real_escape_string($conn, $_POST['title']);
$content = mysqli_real_escape_string($conn, $_POST['content']);
$published = mysqli_real_escape_string($conn, $_POST['published']);
$thumb = mysqli_real_escape_string($conn, $_POST['thumb']);
$description = mysqli_real_escape_string($conn, $_POST['description']);

$query = "INSERT INTO posts (title, content, published, thumb, description)
VALUES ('$title', '$content', '$published', '$thumb', '$description')";

if (mysqli_query($conn, $query)) {
    echo "New post added successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);