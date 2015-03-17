<?php
include 'session.php';

include 'db.php';
$stmt = $dbh->prepare( "INSERT INTO students(
            fname,
            lname,
            email,
            phone,
            degree,
            current,
            sid,
            vet,
            international,
            runningstart,
            software_prereq1,
            software_prereq2,
            software_prereq3,
            software_prereq4,
            network_prereq1,
            network_prereq2,
            network_prereq3,
            network_prereq4,
            comments,
            edu,
            numberofcredits,
            verify) 
            VALUES (
            :fname,
            :lname,
            :email,
            :phone,
            :degree,
            :current,
            :sid,
            :vet,
            :international,
            :runningstart,
            :software_prereq1,
            :software_prereq2,
            :software_prereq3,
            :software_prereq4,
            :network_prereq1,
            :network_prereq2,
            :network_prereq3,
            :network_prereq4,
            :comments,
            :edu,
            :numberofcredits,
            :verify)");
            
            
                                          

// use PARAM_STR although a number                        
$stmt->bindParam(':fname', $_SESSION['fname'], PDO::PARAM_STR);       
$stmt->bindParam(':lname', $_SESSION['lname'], PDO::PARAM_STR); 
$stmt->bindParam(':email', $_SESSION['email'], PDO::PARAM_STR);
$stmt->bindParam(':phone', $_SESSION['phone'], PDO::PARAM_STR); 
$stmt->bindParam(':degree', $_SESSION['degree'], PDO::PARAM_STR);
$stmt->bindParam(':current', $_SESSION['current'], PDO::PARAM_STR);
$stmt->bindParam(':sid', $_SESSION['SID'], PDO::PARAM_STR); 
$stmt->bindParam(':vet', $_SESSION['vet'], PDO::PARAM_STR);
$stmt->bindParam(':international', $_SESSION['international'], PDO::PARAM_STR); 
$stmt->bindParam(':runningstart', $_SESSION['runningstart'], PDO::PARAM_STR); 
$stmt->bindParam(':software_prereq1', $_SESSION['software_prereq1'], PDO::PARAM_STR); 
$stmt->bindParam(':software_prereq2', $_SESSION['software_prereq2'], PDO::PARAM_STR); 
$stmt->bindParam(':software_prereq3', $_SESSION['software_prereq3'], PDO::PARAM_STR); 
$stmt->bindParam(':software_prereq4', $_SESSION['software_prereq4'], PDO::PARAM_STR); 
$stmt->bindParam(':network_prereq1', $_SESSION['network_prereq1'], PDO::PARAM_STR); 
$stmt->bindParam(':network_prereq2', $_SESSION['network_prereq2'], PDO::PARAM_STR); 
$stmt->bindParam(':network_prereq3', $_SESSION['network_prereq3'], PDO::PARAM_STR); 
$stmt->bindParam(':network_prereq4', $_SESSION['network_prereq4'], PDO::PARAM_STR); 
$stmt->bindParam(':comments', $_SESSION['comments'], PDO::PARAM_STR); 
$stmt->bindParam(':edu', $_SESSION['edu'], PDO::PARAM_STR); 
$stmt->bindParam(':numberofcredits', $_SESSION['numberofcredits'], PDO::PARAM_STR); 
$stmt->bindParam(':verify', $_SESSION['verify'], PDO::PARAM_STR);

/*
 
$sql= "SELECT fname,
            lname,
            email,
            phone,
            degree,
            current,
            sid,
            vet,
            international,
            runningstart,
            software_prereq1,
            software_prereq2,
            software_prereq3,
            software_prereq4,
            network_prereq1,
            network_prereq2,
            network_prereq3,
            network_prereq4,
            comments,
            edu,
            numberofcredits,
            verify FROM students";
            
$stmt = $dbh->query($sql); 
$row =$stmt->fetchObject();
*/

while ($dbh = $stmt->fetch)
$stmt->execute(); 

?>