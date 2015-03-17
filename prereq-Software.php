<?php include 'session.php';
      //include 'redirectus.php';
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="favicon.ico">
      <title>Software Development Prerequisites</title>
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/starter-template.css" rel="stylesheet">
      <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
      <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
      <script src="js/ie-emulation-modes-warning.js"></script>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!-- navigation -->
  	<?php include 'nav.php'; ?>
      <div class="container">
         
            <h1>Software Development Program Prerequisites</h1>
          
            <form action='education.php' method='POST'>
               <div class="row">
                  <p class = "lead">
                     Please check all that you have completed.
                     Note:  If you don't meet all of the prerequisites, or have extensive industry experience, an advisor will contact you to discuss options.<br>
                  </p>
                  <div class = "container">
                  <div class = "checkbox">
                     <input type="checkbox" name="software_prereq1" value="Programming 1 and 2" <?php if (isset($_SESSION['software_prereq1'])){echo "checked";} ?>>Programming I and II (CSCI 141 &amp; 145 or CSCI 131 &amp; 132)<br>
                     <input type="checkbox" name="software_prereq2" value="IT 201" <?php if (isset($_SESSION['software_prereq2'])){echo "checked";} ?>>IT 201: Database Fundamentals, or equivalent <br>
                     <input type="checkbox" name="software_prereq3" value="IT 190" <?php if (isset($_SESSION['software_prereq3'])){echo "checked";} ?>>IT 190:  Intro to Linux or LPI1 or Linux Essentials<br>
                     <input type="checkbox" name="software_prereq4" value="IT 121" <?php if (isset($_SESSION['software_prereq4'])){echo "checked";} ?>>IT 121:  HTML/CSS, or equivalent<br>
                  </div>
               </div>
               </div>
               <textarea name="comments" id='comments' class="form-control" placeholder="Comments"><?php if (isset($_SESSION['comments'])){echo $_SESSION['comments'];} ?></textarea>

               <a class="btn btn-lg btn-primary" href="tellusmore.php">Back</a>
               <button id ="btnSubmit" type="submit" class="btn btn-lg btn-success" style="margin-left:10px;">Next</button>
            </form>

      </div>
      <!-- /.container -->
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
       <script src="js/jquery-2.1.3.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="js/ie10-viewport-bug-workaround.js"></script>
   </body>
</html>