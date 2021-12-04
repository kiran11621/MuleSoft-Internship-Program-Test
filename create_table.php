<?php

    // to include connection file
    include("conn.php");

    // check if table already exists in database or not
    $sql = "SELECT 1 FROM `Movies_Database`.`Movies` LIMIT 1;";
    $result = mysqli_query($conn, $sql);
    
    if($result == false ){
    
        $sql = "CREATE TABLE `movies_database`.`movies` ( `id` 0INT(11) NOT NULL AUTO_INCREMENT , `movie_name` VARCHAR(256) NOT NULL , `actor` VARCHAR(256) NOT NULL , `actress` VARCHAR(256) NOT NULL , `director` VARCHAR(256) NOT NULL , `year_of_release` VARCHAR(256) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
            
        // checking
        if (mysqli_query($conn, $sql)) {
            echo "<h3>Table Movies created successfully</h3>";
        } else {
            echo "Error creating table: " . $conn->error;
        }
    } else {
        echo "<h3>Table Already Exists</h3>";
    }

    // Closing connection
    $conn->close();

?>