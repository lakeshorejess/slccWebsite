<?php
    $hostname = 'jessicalindsey.slccwebdev.com';
    $username = 'jessicalindsey';
    $password = 'OI5jpfLWsgU9';
    $dbname = 'test';

    try {
        //Create a new PDO Object with connection parameters
        $conn = new PDO('mysql:host=$hostname;dbname=$dbname;, $username, $password');
        
        //Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'INSERT INTO contacts (name, email, contactBack, comments)
                VALUES ('Jessica Lindsey', 'j@l.com', 'Yes', 'I cannot wait to eat at Cafe Rio!');';


        //Executes SQL statement on the server
        $conn->exec($sql);

        $last_id = $conn->lastInsertId();

        // //Send success message
        // echo 'Table Created Successfully';
        
        // //Send a success message to screen
        // echo 'Database connection successful!';
    }  catch (PDOExceoption $error) {
        //Return error code if one is created
        echo 'Connection failed: ' . $error -> getMessage();
    }

    $conn = null;

?>

<!-- <?php
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
        $sql = "INSERT INTO kevinContacts (name, email, contactBack, comments)
                VALUES ('John Doe', 'jd@email.com', 'Yes', 'I look forward to hearing from you.');";

        //Execute SQL statement on server
        $conn->exec($sql);

        //Get the id of the last row added
        $last_id = $conn->lastInsertId();

        //Send success message to screen
        echo "A new record was added successfully. The last inserted ID is: " . $last_id;


    } catch (PDOException $error) {

        //Return error code if one is created
        echo "An error occurred: <br>" . $sql . "<br>" . $error->getMessage();
    }
?> -->
