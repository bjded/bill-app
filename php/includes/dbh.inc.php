<?php
    // Local Credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "billapp_local";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected to ".$database." Database!";
?>