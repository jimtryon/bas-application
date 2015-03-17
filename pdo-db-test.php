<?php
    $servername = '192.185.191.5';
    $username='alex_brd15';
    $password='blackraindrops15';
    $dbname = "alex_bas";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ;
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO `alex_bas`.`students` (`id`, `date`, `fname`, `lname`, `email`, `phone`, `degree`, `current`, `sid`, 
    `vet`, `international`, `runningstart`, `software_prereq1`, `software_prereq2`, `software_prereq3`, `software_prereq4`, 
    `network_prereq1`, `network_prereq2`, `network_prereq3`, `network_prereq4`, `comments`, `edu`, `numberofcredits`, `verify`, `content`) 
    VALUES (NULL, :date, :fname, :lname, :email, :phone, :degree, :current, :sid, :vet, :international, :runningstart, :software_prereq1, :software_prereq2, 
    :software_prereq3, :software_prereq4, :network_prereq1, :network_prereq2, :network_prereq3, :network_prereq4, :comments, :edu, :numberofcredits, :verify, :content)");
    //bindParam only accepts variables as a parameter. saved the date to a variable and then passed it into bindParam.
    $datetime = date("Y-m-d");
    $stmt->bindParam(':date', $datetime);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':degree', $degree);
    $stmt->bindParam(':current', $current);
    $stmt->bindParam(':sid', $sid);
    $stmt->bindParam(':vet', $vet); 
    $stmt->bindParam(':international', $international); 
    $stmt->bindParam(':runningstart', $runningstart); 
    $stmt->bindParam(':software_prereq1', $software_prereq1); 
    $stmt->bindParam(':software_prereq2', $software_prereq2); 
    $stmt->bindParam(':software_prereq3', $software_prereq3); 
    $stmt->bindParam(':software_prereq4', $software_prereq4); 
    $stmt->bindParam(':network_prereq1', $network_prereq1); 
    $stmt->bindParam(':network_prereq2', $network_prereq2); 
    $stmt->bindParam(':network_prereq3', $network_prereq3); 
    $stmt->bindParam(':network_prereq4', $network_prereq4); 
    $stmt->bindParam(':comments', $comments); 
    $stmt->bindParam(':edu', $edu); 
    $stmt->bindParam(':numberofcredits', $numberofcredits); 
    $stmt->bindParam(':verify', $verify); 
    $stmt->bindParam(':content', $content); 


    

    // insert a row
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];
    $degree = $_SESSION['degree'];
    $current = $_SESSION['current'];
    $sid = $_SESSION['sid'];
    $vet = $_SESSION['vet'];
    $international = $_SESSION['international'];
    $runningstart = $_SESSION['runningstart'];
    $software_prereq1 =  $_SESSION['software_prereq1'];
    $software_prereq2 =  $_SESSION['software_prereq2'];
    $software_prereq3 = $_SESSION['software_prereq3'];
    $software_prereq4 = $_SESSION['software_prereq4'];
    $network_prereq1 = $_SESSION['network_prereq1'];
    $network_prereq2 = $_SESSION['network_prereq2'];
    $network_prereq3 = $_SESSION['network_prereq3'];
    $network_prereq4 = $_SESSION['network_prereq4'];
    $comments = $_SESSION['comments'];
    $edu = $_SESSION['edu'];
    $numberofcredits = $_SESSION['numberofcredits'];
    $verify = $_SESSION['verify'];
    $content = "http://jim.greenrivertech.net/Projects/BAS/uploads/" . $_SESSION['fileinfo'];
    
    $stmt->execute();
    
    //echo "New records created successfully";
    session_unset();
    
    session_destroy();
    
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>