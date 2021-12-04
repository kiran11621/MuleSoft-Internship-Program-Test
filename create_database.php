<?php

// include connection file
include('connection_setup.php');

// create database
// SQL Query for creating Databse
$sql = "CREATE DATABASE Movies_Database;";

$database_name = "Movies_Database";

// checking if database already exists or not
if (mysqli_select_db($conn, $database_name)) {
    echo "<h3>Database Already Exists</h3>";
}
// if database not exist create 
else {
    if (mysqli_query($conn, $sql)) {
        echo "<h3>Database Created Successfully</h3>";
    } else {
        echo "Error occured creating Database: " . mysqli_error($conn);
    }
}

// closing connection
$conn->close();
