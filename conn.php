

<?php
include("navbar.php");

// setting server name, username, password and database
$server_name = "localhost";
$username = "root";
$password = "";
$database = "Movies_Database";

// create connection 
$conn = new mysqli($server_name, $username, $password, $database);

// check connection 
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

?>