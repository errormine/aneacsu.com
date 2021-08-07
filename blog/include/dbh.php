<?php
    $conn = mysqli_connect("localhost", "anon", "anon", "biolink");
    
    // kill if there is an error
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }