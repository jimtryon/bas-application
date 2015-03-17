<?php
//include 'test.php';
include 'session.php';
//session arrays being stored into variables
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




//parses out session variables for summary

?>
<dl class="dl-horizontal">
    <dt>First name:</dt>
    <dd>
        <?php echo $fname; ?>
    </dd>
    <dt>Last name:</dt>
    <dd>
        <?php echo $lname; ?>
    </dd>
    <dt>Email:</dt>
    <dd>
        <?php echo $email; ?>
    </dd>
    <dt>Phone:</dt>
    <dd>
        <?php echo $phone; ?>
    </dd>
    <dt>Degree interested in:</dt>
    <dd>
        <?php echo $degree; ?>
    </dd>
    <dt>Student status:</dt>
    <dd>
        <?php echo $current; ?>
    </dd>
    <?php if ($sid !="" ) { ?>
    <dt>Student ID: </dt>
    <dd>
        <?php echo $sid; ?>
    </dd>
    <?php } ?>
    <?php if ($vet=="1" ) { ?>
    <dt>Veteran: </dt>
    <dd>
        <?php echo "Yes"; ?>
    </dd>
    <?php } ?>
    <?php if ($international=="1" ) { ?>
    <dt>International: </dt>
    <dd>
        <?php echo "Yes"; ?>
    </dd>
    <?php } ?>
    <?php if ($runningstart=="1" ) { ?>
    <dt>Running start: </dt>
    <dd>
        <?php echo "Yes"; ?>
    </dd>
    <?php } ?>
    <dt>Highest education: </dt>
    <dd>
        <?php echo $edu; ?>
    </dd>
    <dt>College credits: </dt>
    <dd>
        <?php echo $numberofcredits; ?>
    </dd>
    <dt>Prerequisites: </dt><dd></dd>
    <?php if ($network_prereq1=="IT 210" ) { ?> <!--checks fields for 
    
        <?php echo "<dd>IT 210 or CCENT</dd>"; } ?>
    
    <?php if ($network_prereq2=="IT 190" ) { ?>
    
        <?php echo "<dd>IT 190 or LPI1 or Linux Essentials</dd>"; ?>
    
    <?php } ?>
    <?php if ($network_prereq3=="IT 102" ) { ?>
    
        <?php echo "<dd>IT 102 or a programming course</dd>"; ?>
    
    <?php } ?>
    <?php if ($network_prereq4=="IT 240" ) { ?>
    
        <?php echo "<dd>IT 240 or 70-411 Microsoft MCP</dd>"; ?>
    
    <?php } ?>
    <?php if ($software_prereq1=="Programming 1 and 2" ) { ?>
    
        <?php echo "<dd>Programming I and II (CSCI 141 &amp; 145 or CSCI 131 &amp; 132)</dd>"; ?>
    
    <?php } ?>
    <?php if ($software_prereq2=="IT 201" ) { ?>
    
        <?php echo "<dd>IT 201: Database Fundamentals, or equivalent</dd>"; ?>
    
    <?php } ?>
    <?php if ($software_prereq3=="IT 190" ) { ?>
    
        <?php echo "<dd>IT 190:  Intro to Linux or LPI1 or Linux Essentials</dd>"; ?>
    
    <?php } ?>
    <?php if ($software_prereq4=="IT 121" ) { ?>
    
        <?php echo "<dd>IT 121:  HTML/CSS, or equivalent</dd>"; ?>
    
    <?php } ?>
    <?php if ($comments !="" ) { ?>
    <dt>Comments: </dt>
    
        <?php echo "<dd> $comments </dd>"; } ?>

         <?php if ($content != "") { ?>
         <dt>Transcript: </dt>

         <?php $url = "http://jim.greenrivertech.net/Projects/BAS/uploads/"; ?>

        <?php echo ' <dd>' . "<a href=".$url. $content . '>' . $url . $content . "</a> </dd>";    
        } ?>
  
  
  
</dl>
<br>
<br>

  	  <script src="js/jquery-2.1.3.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/parsley.min.js"></script>
	

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  	