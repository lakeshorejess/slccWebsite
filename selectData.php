<?php
    $hostname = 'jessicalindsey.slccwebdev.com';
    $username = 'jessicalindsey';
    $password = 'OI5jpfLWsgU9';
    $dbname = 'test';

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
   
<!-- //     try {
//         //Create a new PDO Object with connection parameters
//         $conn = new PDO('mysql:host=$hostname;dbname=$dbname;, $username, $password');
        
//         //Set PDO error mode to exception
//         $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//         $sql = 'SELECT * FROM contacts';

//         //Executes SQL statement on the server
//         $conn -> exec($sql);

//         //Send success message
//         echo '<b>The data currently in the database: </b><br>\n';
//         foreach ($conn -> query($sql) as $row){
//             echo $row['contactID'] . ' | ';
//             echo $row['name'] . ' | ';
//             echo $row['email'] . ' | ';
//             echo $row['contactBack'] . ' | ';
//             echo $row['dateSent'] . ' | ';
//         };
        
//         //Send a success message to screen
//         echo 'Database connection successful!';
//     }  catch (PDOExceoption $error) {
//         //Return error code if one is created
//         echo 'Connection failed: ' . $error -> getMessage();
//     }

//     $conn = null;

// -->
