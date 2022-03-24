<?php
    $hostname = 'jessicalindsey.slccwebdev.com';
    $username = 'jessicalindsey';
    $password = 'OI5jpfLWsgU9';
    $dbname = 'test';

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
        
        //Send success message to screen
        echo "Database Connection Successful!";


    } catch (PDOException $error) {

        //Return error code if one is created
        echo "Connection Failed: " . $error->getMessage();
    }

    $conn = null;
?>

//     try {
//         //Create a new PDO Object with connection parameters
//         $conn = new PDO('mysql:host=$hostname;dbname=$dbname;, $username, $password');
        
//         //Set PDO error mode to exception
//         $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//         $sql = 'CREATE TABLE contacts (
//                 contactID INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//                 name VARCHAR(100) NULL;
//                 email VARCHAR(100) NULL;
//                 contactBack VARCHAR(3) NULL;
//                 dateSent DATETIME DEFAULT CURRENT_TIMESTAMP);';

//         //Executes SQL statement on the server
//         $conn -> exec($sql);

//         //Send success message
//         echo 'Table Created Successfully';

//         //Send a success message to screen
//         echo 'Database connection successful!';
//     }  catch (PDOExceoption $error) {
//         //Return error code if one is created
//         echo 'Connection failed: ' . $error -> getMessage();
//     }

//     $conn = null;

// ?>


