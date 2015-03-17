<?php include 'session.php';

$pagedirect = "";

 if ($_SESSION['degree'] == "software") {
        header("Location: prereq-Software.php");
        //$pagedirect = "prereq-Software.php";
        //echo $pagedirect;
 }
 
 else if ($_SESSION['degree'] == "networking") {
        header("Location: prereq-Network.php");
        //$pagedirect = "prereq-Network.php";
        //echo $pagedirect;
    }
    
 else if ($_SESSION['degree'] == "undecided") {
        header("Location: confirmation.php");
        //$pagedirect = "prereq-Undecided.php";
       // echo $pagedirect;

}
    
?>