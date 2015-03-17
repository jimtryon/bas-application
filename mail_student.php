<?php 

//When an application is completed, the applicant receives a confirmation email
//New students receive a link to the Next Steps page Include social networking links in all emails
include 'https://black-rain-drops-alexykwon.c9.io/session.php';
//include 'https://black-rain-drops-alexykwon.c9.io/validation.php';

                //send email to an applicants
                //$email=$_SESSION['email'];
                
		$to = $_GET['email'];
                //$to = 'yoriko.sosa@gmail.com';

		$subject = 'Thank you for submitting your form.';

		//$message= "Subject:   {$_POST[$email]}";

		$message = 'IT BAS application has been submitted. '.'\r\n';
		
		$message.= '<html><a href="https://black-rain-drops-alexykwon.c9.io/next-steps.php">Next steps</a>';
                
                $message.= '<strong>Follow us on:</strong> \r\n';
                
                $message.= '<a href="https://www.facebook.com/greenrivertechnologyprograms">Facebook</a> \r\n';
                
                $message.= '<a href="https://twitter.com/GreenRiverIT">Twitter</a> \r\n';
                
                $message.= '<a href="https://instagram.com/greenrivertech/">Instagram</a> \r\n';
                
                $message.= '<a href="https://www.linkedin.com/groups/Green-River-Technology-Program-6781985?home=&gid=6781985&trk=anet_ug_hm">LinkedIn</a></html>';
                
		$headers = "From: yoriko.sosa@gmail.com";

                mail($to, $subject, $message, $headers);
                
		header("Location: https://black-rain-drops-alexykwon.c9.io/emailconf.php");

		exit;

?>

