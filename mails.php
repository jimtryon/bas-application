<?php include 'session.php';
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
    $content = $_SESSION['fileinfo'];


        //1. send email to applicants
        //get email address from form
	$to = $_SESSION['email'];
	
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


        //2. send email to advisors with summary
	$to2 = 'jtryon@mail.greenriver.edu';

	$subject2 = 'IT BAS application has been submitted';

	$message2= '<html>';

	$message2.= 'First name: '.$fname.'<br>';
		
	$message2.= 'Last name: '.$lname.'<br>';
		
	$message2.= 'Email: '.$email.'<br>';
		
	$message2.= 'Phone: '.$phone.'<br>';
		
	$message2.= 'Degree interested in: '.$degree.'<br>';
		
	$message2.= 'Student status: '.$current.'<br>';
		
        if ($sid !="" ){
	$message2.= 'SID: '. $sid.'<br>';
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
                
	$message2.= 'Highest education: '.$edu.'<br>';
		
	if($numberofcredits!=""){
    $message2.= 'College credits: '.$numberofcredits.'<br>';
    }
    
    $url = "http://jim.greenrivertech.net/Projects/BAS/uploads/";
    if ($content != "") {
    $message2.= "<a href=".$url. $content . '>' . $url . $content . "</a><br>";   
    //$message2.= $url. $content. '>' . $url . $content . '</a>';    
    }
                
    $message2.= 'Prerequisites:<br>';
                
        if ($network_prereq1=='IT 210' ){
        $message2.= 'IT 210 or CCENT<br>';
        }
                
        if ($network_prereq2=='IT 190' ){
        $message2.= 'IT 190 or LPI1 or Linux Essentials<br>';    
        }
    
        if ($network_prereq3=='IT 102' ){
        $message2.= 'IT 102 or a programming course<br>';    
        }
                
        if ($network_prereq4=='IT 240' ){
        $message2.= 'IT 240 or 70-411 Microsoft MCP<br>';    
        }
                
        if ($software_prereq1=='Programming 1 and 2' ){
        $message2.= 'Programming I and II (CSCI 141 &amp; 145 or CSCI 131 &amp; 132)<br>';    
        }

        if ($software_prereq2=='IT 201' ){
        $message2.= 'IT 201: Database Fundamentals, or equivalent<br>';    
        }
                
        if ($software_prereq3=='IT 190' ){
        $message2.= 'IT 190:  Intro to Linux or LPI1 or Linux Essentials<br>';    
        }
                
        if ($software_prereq4=="IT 121" ){
        $message2.= 'IT 121:  HTML/CSS, or equivalent<br>';    
        }
                
        if ($comments !="" ){
        $message2.= 'Comment: '.$comments;    
        }
        
        $message2.= '</html>';     
	//$headers2 = "From: {$_POST['email']}";
 
	mail($to2, $subject2, $message2, $headers);
		
	header("Location: emailconf.php");

	//exit;

?>
