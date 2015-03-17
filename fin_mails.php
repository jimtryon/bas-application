<?php

        //1. send email to applicants
        //get email address from form
	$to = $_POST['email'];
	
	//subject line
	$subject = 'Thank you for submitting your form';

	//message(body text)
	$message = 'IT BAS application has been submitted.<br>';
		
	$message.= '<html><a href="https://black-rain-drops-alexykwon.c9.io/next-steps.php">Next steps</a><br><br><br>';
                
        $message.= '<strong>Follow us on:</strong><br>';
                
        $message.= '<a href="https://www.facebook.com/greenrivertechnologyprograms">Facebook</a><br>';
                
        $message.= '<a href="https://twitter.com/GreenRiverIT">Twitter</a><br>';
                
        $message.= '<a href="https://instagram.com/greenrivertech/">Instagram</a><br>';
                
        $message.= '<a href="https://www.linkedin.com/groups/Green-River-Technology-Program-6781985?home=&gid=6781985&trk=anet_ug_hm">LinkedIn</a></html>';
        
        //convert message in html format        
	$headers  = 'MIME-Version: 1.0' . "\r\n";
                
        $headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        //use mail function to send email
        mail($to, $subject, $message, $headers);



        //2. send email to advisors
	$to2 = 'yoriko.sosa@gmail.com';

	$subject2 = 'IT BAS application has been submitted';

	$message2= '<html>Subject: '. $subject;

	$message2.= 'First name: '.$_POST['fname'];
		
	$message2.= 'Last name: '.$_POST['lname'];
		
	$message2.= 'Email: '.$_POST['email'];
		
	$message2.= 'Phone: '.$_POST['phone'];
		
	$message2.= 'Degree interested in: '.$_POST['degree'];
		
	$message2.= 'Student status: '.$_POST['current'];
		
        if ($sid !="" ){
	$message2.= 'SID: '. $_POST['sid'];
        }
                
        if ($vet=="1" ){
	$message2.= 'Veteran:  Yes<br>';
        }
                
        if ($international=="1" ){
	$message2.= 'International:   Yes<br>';
	}
                
        if ($runningstart=="1" ){
	$message2.= 'Running start:   Yes<br>';
        }
                
	$message2.= 'Highest education: '.$_POST['edu'];
		
	$message2.= 'College credits: '.$_POST['numberofcredits'];
                
        $message2.= 'Prerequisites:<br>';
                
        if ($_POST['network_prereq1']=='IT 210' ){
        $message2.= 'IT 210 or CCENT<br>';
        }
                
        if ($_POST['network_prereq2']=='IT 190' ){
        $message2.= 'IT 190 or LPI1 or Linux Essentials<br>';    
        }
    
        if ($_POST['network_prereq3']=='IT 102' ){
        $message2.= 'IT 102 or a programming course<br>';    
        }
                
        if ($_POST['network_prereq4']=='IT 240' ){
        $message2.= 'IT 240 or 70-411 Microsoft MCP<br>';    
        }
                
        if ($_POST['software_prereq1']=='Programming 1 and 2' ){
        $message2.= 'Programming I and II (CSCI 141 &amp; 145 or CSCI 131 &amp; 132)<br>';    
        }

        if ($_POST['software_prereq2']=='IT 201' ){
        $message2.= 'IT 201: Database Fundamentals, or equivalent<br>';    
        }
                
        if ($_POST['software_prereq3']=='IT 190' ){
        $message2.= 'IT 190:  Intro to Linux or LPI1 or Linux Essentials<br>';    
        }
                
        if ($_POST['software_prereq4']=="IT 121" ){
        $message2.= 'IT 121:  HTML/CSS, or equivalent<br>';    
        }
                
        if ($_POST['comments'] !="" ){
        $message2.= 'Comments: '.$_POST['comments'];    
        }
        
        $message2.= '</html>';     
	//$headers2 = "From: {$_POST['email']}";
 
	mail($to2, $subject2, $message2, $headers);
		
	header("Location: emailconf.php");

	//exit;

?>
