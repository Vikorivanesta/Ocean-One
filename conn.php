<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ocean_one";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Mengambil data secara random
    $id = rand(1,5);
    $sql = "SELECT main_heading, main_subtitle, align_text, kickstart_text FROM text WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $text = mysqli_fetch_assoc($result);
    ?>