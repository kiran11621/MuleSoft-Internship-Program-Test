<?php
include("navbar.php");

    // setting server name, username and password
    $server_name = "localhost";
    $username = "root";
    $password = "";

    // create connection 
    $conn = new mysqli($server_name, $username, $password);

    // check connection 
    if($conn->connect_error) {
        die("Connection Failed: ". $conn->connect_error);
    } else {
        echo "<h3>Connection Successful</h3>";
    }

    // closing connection
    // $conn->close();
