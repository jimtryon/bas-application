<?php
/*$servername = '192.185.191.5';
    $username='alex_brd15';
    $password='blackraindrops15';
    $dbname = "alex_bas"; */

// Try to connect to database and print out success message, 
// otherwise print out error 

/*try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }

    // Define parameters 
    $username = $_POST['inputEmail'];
    $password = $_POST['inputPassword'];

    // Testing
    //$form_data = $_POST;
    //print_r($form_data);

    //return;

    //echo 'Success';

    // Pull username from the database
    $stmt = $conn->prepare("SELECT `id` FROM `users` WHERE `username` = :inputEmail AND 
    	`password` = :inputPassword");
    $stmt->bindParam(':inputEmail', $username);
    $stmt->bindParam(':inputPassword', $password);
    $stmt->execute();

    // Return the number of rows
    if ($stmt->fetchColumn() > 0) {
        

    	$_SESSION['username'] = $username;
    	$_SESSION['password'] = $password;

        // Redirect the user to data table page
        // 302 Found
        header('Location: datatable.php');
    } 
    else {
    	echo 'Not an authorized user';
    }
    */
?>
