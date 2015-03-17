<?php 

//When an application is completed, advisors receive an email with a link to the Applicant Summary

        //advisor emails
		$to = 'yoriko.sosa@gmail.com';

		$subject = 'IT BAS application has been submitted. ';

		//$message= "Subject:   $subject\r\n";

		$message = "<html>IT BAS application has been submitted.\r\n";
		
		$message.= "<a href=\"https://black-rain-drops-alexykwon.c9.io/datatable.php\">Applicant summary page</a></html>";
                
		//$headers = "From: {$_POST['email']}";
 
		mail($to, $subject, $message);
        //mail($to, $subject, $message, $headers);
		
		header("Location: https://black-rain-drops-alexykwon.c9.io/emailconf.php");

		exit;

?>
