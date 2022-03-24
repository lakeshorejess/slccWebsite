<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname   = "test";

    try {
        //Create new PDO Object with connection parameters
        $conn = new PDO("mysql:host=$hostname;dbname=$dbname",$username, $password);
        
        //Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        //Variable containing SQL command
        $sql = "CREATE TABLE SuperKevin (
                contactID INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100) NULL,
                email VARCHAR(100) NULL,
                contactBack VARCHAR(3) NULL,
                comments VARCHAR(600) NULL,
                dateSent DATETIME DEFAULT CURRENT_TIMESTAMP);";

        //Execute SQL statement on server
        $conn->exec($sql);

        //Send success message to screen
        echo "Table Created Successfully!";


    } catch (PDOException $error) {

        //Return error code if one is created
        echo "Connection Failed: " . $error->getMessage();
    }
?>