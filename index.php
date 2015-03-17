<?php include 'session.php';
      include 'validation.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>IT BAS Application</title>
    

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/starter-template.css" rel="stylesheet">
	<link href="css/jsvalidate.css" rel="stylesheet">
	
	
	<link href="css/parsley.css" rel="stylesheet">

	<!-- <link rel="stylesheet" type="text/css" 	href="css/ext-all.css"> -->


	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]-->
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <!--[endif]-->
  </head>

  <body>
    <!-- navigation -->
  	<?php include 'nav.php'; ?>

  	<div class="container">
  		<!-- Contact Info -->
  		<h2>Contact Info</h2>

  		<!-- redirects to itself and escapes any special chars -->
  		<form id="contactForm" action="tellusmore.php" name="contactForm" autocomplete="off" method="POST" 
      data-parsley-validate>
  			<div class="form-group" id="errors">
  			</div>
  			<div class="row">
  				<div class="col-xs-6">
  					<!-- <div class="form-group"> -->
  					<label class ="sr-only" id="first" for="fname">First name</label>
  					<input type="text" id="fname" name="fname" placeholder="First Name"  class="form-control" autofocus 
  					data-parsley-trigger="blur" data-parsley-pattern="^[a-zA-Z]+$" data-parsley-required
  					data-parsley-required-message="Please enter your first name" <?php if(isset($_SESSION['fname'])){
            $fname=$_SESSION['fname'];
            echo "value='" . $fname . "'";
            } ?>>

  					<!-- first name error message-->
  					<?php echo $fnameErr;?>
  					<!-- </div> -->
  				</div>
  				<div class="col-xs-6">
  					<!-- <div class="form-group"> -->
  					<label class ="sr-only" id="last" for="lname">Last name</label>
  					<input type="text" name="lname" placeholder="Last Name" id="lname" class="form-control"
  					data-parsley-trigger="blur" data-parsley-pattern="^[a-zA-Z]+$" data-parsley-required
  					data-parsley-required-message="Please enter your last name" <?php if(isset($_SESSION['lname'])){
            $lname=$_SESSION['lname'];
            echo "value='" . $lname . "'";
            } ?>>

  					<!-- last name error message -->
  					<?php echo $lnameErr;?>
  				
  				</div>
  			</div>

  			<label class ="sr-only" for="email">Email</label>
  			<input type="email" id="email" name="email"  placeholder="Email" class="form-control"
  			data-parsley-trigger="blur" data-parsley-required
  			data-parsley-required-message="Please enter your student email address" <?php if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        echo "value='" . $email . "'";
        } ?>>
  			
        <!-- email error message  -->
  			<?php echo $emailErr; ?>

  			<p>If you are currently a Green River student, please use your @mail.greenriver.edu address</p>
  			<label class ="sr-only" for="phone">Phone</label>
  			<input type="text" name="phone" id="phone" maxlength="10" placeholder="Preferred Phone" class="form-control"
  			data-parsley-trigger="blur" data-parsley-type="digits"
  			data-parsley-minlength="10" data-parsley-required
  			data-parsley-required-message="Please enter a contact number" <?php if(isset($_SESSION['phone'])){
        $phone=$_SESSION['phone'];
        echo "value='" . $phone . "'";
        } ?>>
  			<?php echo $phoneErr; ?>

  			
  				<div class ="row">

  				<div class="col-xs-6">

  					<!-- <div class="rightfloat"> -->
  					<label id="degree">Which degree are you interested in?</label>
  					<!-- popover1 is the hover tooltip for software dev -->

            <div class="block">
  							<input id="software" type="radio" name="degree" value="software" role="radio" data-toggle="popover1" 
  							aria-checked="false" required data-parsley-group="degree" data-parsley-required
  							data-parsley-required-message="Please select a degree" 
                <?php if($_SESSION['degree']=='software'){
                echo 'checked="checked"';
                }
                ?>>

  						<label for="software" data-toggle='popover1'>Software Development</label><br>
  					
  					<!-- popover2 is the hover tooltip for networking -->
  							<input id="networking" type="radio" name="degree" value="networking" role="radio" data-toggle="popover2" 
  							aria-checked="false" 
                <?php if($_SESSION['degree']=='networking'){
                echo 'checked="checked"';
                }
                ?>>

  							<label for="networking" data-toggle="popover2">Network Administration & Security</label><br>
  						
  							<input id="undecided" type="radio" name="degree" value="undecided"
                <?php if($_SESSION['degree']=='undecided'){
                echo 'checked="checked"';
                }
                ?>>

  							<label for ="undecided">Undecided
  						</label><br>
  					</div>

  				</div>

  				
          <div class = "col-xs-6">
  					<div class="bg-warning deadline">

  						<h4>Deadlines:</h4>
  						<ul>
  							<li>Fall quarter: Aug 15</li>
  							<li>Winter quarter: Dec 15</li>
  							<li>Spring quarter: Mar 15</li>
  							<li>Summer quarter: June 1</li>
  						</ul>

  					</div>


  				</div>
  				<button type="submit" id="continue" class="btn btn-lg btn-success">Next</button>
  			</div>

  			<!-- END Contact Info -->
  		</form>

  	</div>



    <!-- Bootstrap core JavaScript -->
    <!-- ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    <script src="js/jquery-2.1.3.js"></script>
       
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parsley.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>

    <!-- jQuery rememberState-->


	

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    
    <script>
    	$(function () {
    		$('[data-toggle="popover1"]').popover({
    			placement: "right",
    			title: "Software Development",
    			content: "Learn to code, build websites, create Android and iOS applications, and more. Expert faculty, small class sizes, and access to cutting-edge technology, at an affordable price.",
    			trigger: "hover"
    		});


    		$('[data-toggle="popover2"]').popover({
    			placement: "right",
    			title: "Network Administration & Security",
    			content: "Hands-on instruction using the latest technology, leading to high-demand careers in Computer Support, Information Security, and Network / System Administration.",
    			trigger: "hover"
    		});
    	});
    </script>
  
</body>
</html>