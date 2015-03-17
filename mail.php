<?php 

//When an application is completed, advisors receive an email with a link to the Applicant Summary

                //advisor emails
		$to = 'yoriko.sosa@gmail.com';

		$subject = 'Submission : IT BAS interest';

		$message= "Subject:   $subject\r\n";

		$message .= "First name:   {$_POST['fname']}\r\n";
		
		$message .= "Last name:   {$_POST['lname']}\r\n";
		
		$message .= "Email:   {$_POST['email']}\r\n";
		
		$message .= "Phone:   {$_POST['phone']}\r\n";
		
		$message .= "Degree interested in:   {$_POST['degree']}\r\n";
		
		$message .= "Student status:   {$_POST['current']}\r\n";
		
                if ($sid !="" ){
		$message .= "SID:   {$_POST['sid']}\r\n";
                }
                
                if ($vet=="1" ){
		$message .= "Veteran:  Yes\r\n";
                }
                
                if ($international=="1" ){
		$message .= "International:   Yes\r\n";
		}
                
                if ($runningstart=="1" ){
		$message .= "Running start:   Yes\r\n";
                }
                
		$message .= "Highest education:  {$_POST['edu']}\r\n";
		
		$message .= "College credits:  {$_POST['numberofcredits']}\r\n";
                
                $message .= "Prerequisites:\r\n";
                
                if ($_POST['network_prereq1']=="IT 210" ){
                $message .= "IT 210 or CCENT\r\n";
                }
                
                if ($_POST['network_prereq2']=="IT 190" ){
                $message .= "IT 190 or LPI1 or Linux Essentials\r\n";    
                }
    
                if ($_POST['network_prereq3']=="IT 102" ){
                $message .= "IT 102 or a programming course\r\n";    
                }
                
                if ($_POST['network_prereq4']=="IT 240" ){
                $message .= "IT 240 or 70-411 Microsoft MCP\r\n";    
                }
                
                if ($_POST['software_prereq1']=="Programming 1 and 2" ){
                $message .= "Programming I and II (CSCI 141 &amp; 145 or CSCI 131 &amp; 132)\r\n";    
                }

                if ($_POST['software_prereq2']=="IT 201" ){
                $message .= "IT 201: Database Fundamentals, or equivalent\r\n";    
                }
                
                if ($_POST['software_prereq3']=="IT 190" ){
                $message .= "IT 190:  Intro to Linux or LPI1 or Linux Essentials\r\n";    
                }
                
                if ($_POST['software_prereq4']=="IT 121" ){
                $message .= "IT 121:  HTML/CSS, or equivalent\r\n";    
                }
                
                if ($_POST['comments'] !="" ){
                $message .= "Comments:  {$_POST['comments']}\r\n";    
                }
                
		$headers = "From: {$_POST['email']}";
 
		mail($to, $subject, $message, $headers);
		
		//header("Location: emailconf.php");

		//exit;

?>
