<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dhruv";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        echo "not connected!"; 
    }
    ?>
