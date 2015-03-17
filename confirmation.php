<?php // delete duplicate/unneeded js files
      //check to make sure sure all pages use same jquery versions
        //error_reporting(E_ALL)
        include 'session.php';
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
  		 
  		
  		 <h1>Confirm Application</h1>
  		 
            <label class="sr-only">Confirm Application</label>
            <!--<form action='emailconf.php'>-->
            <form method="POST" action='mails.php'>
                
             
               <div class="row">
                   
                  <p class = "lead">Please verify this information is correct and click submit</p>
                  <?php include 'summary.php' ?>
               </div>
                
               <a class="btn btn-lg btn-primary" href="education.php">Back</a>
               <button type="submit" id="submit" class="btn btn-lg btn-success" style="margin-left:10px;">Next</button>
               </form>
               		
  		
  	</div>
</body>
</html>