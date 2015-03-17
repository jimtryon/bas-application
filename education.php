<?php include 'session.php';
//include 'redirectus.php';

//print_r($_SESSION);
//echo '<br>';

//ini_set('display errors',1);
//error_reporting(E_ALL);
//include 'test.php';

//echo file_get_contents("http://matt.greenrivertech.net/upload.php");
//include 'upload.php';
      //include 'test.php';
      
      // Test if the checkbox is checked before we submit the page
     // $submit = $_POST['submit'];
      $verify = $_POST['verify'];
      
      //echo "Value of var: " . $verify;
      
      //header("Location: upload.php");
      
      
      //if ($_SERVER["REQUEST_METHOD"] == "POST" && $_SERVER["PHP_SELF"] == '/upload.php') {
      //if ($verify) {
        //$destination_url = 'confirmation.php';
        //header("Location: $destination_url");
    //} else {
          //$errmsg = "<p class='errortext'>Please check the box that you agree.</p>";
        //}
      //}
        //echo 'Checkbox was checked';

      // directory where the files are going to be stored
$dir = "uploads/";

$file = $dir . basename(trim(str_replace(' ', '_', $_FILES["file"]["name"])));
// not used
$upload_ok = 1;

// holds the file extension of the file
$fileType = pathinfo($file, PATHINFO_EXTENSION);


if (isset($_POST['file-submit'])) {

    //$error .= "<p class='errortext'> * There is already a user with that email. </p>";


    // Check if the file exists
    if (file_exists($file)) {
        $error .= "<p class='errortext'>File already exists<br></p>";
        $upload_ok = 0;
    }

    // Limit size of files to 5MB
    if ($_FILES["file"]["size"] > 5000000) {
        $error .= "<p class='errortext'>File is too big</p><br>";
        $upload_ok = 0;
    }

    // Allow certain file types
    if ($fileType != "jpg" && $fileType != "png" && $fileType != "pdf") {
        $error .= "<p class='errortext'>Not a valid file.  Only JPG, PNG, and PDf are allowed.</p><br>";
        $upload_ok = 0;
    }

    // Check if upload_OK is set to 0 to indicate errors
    if ($upload_ok == 0) {
        $error .= "<p class='errortext'>File not uploaded<br>";

    // Success
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
            $success = "File ". basename($_FILES["file"]["name"]).
            " uploaded successfully";
            $_SESSION["filepath"] = $dir . trim(str_replace(' ', '_', $_FILES["file"]["name"]));;
            // Replace spaces with an underscore
        } else {
            'There was an error uploading the file.';
        }

    }
}

?>        

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="js/favicon.ico">

    <title>Education</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fileinput.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
    <link href="css/parsley.css" rel="stylesheet">

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

    <!-- 
     Print session info
    print_r($_SESSION);
    ?> -->


    <!-- file upload form -->
    

    <div class="container">

      <div class="starter-template">
       
       <div class = "col-xs-6"> 
        <h1>Education</h1>
        
        
        <!-- Education -->
                
        <form name="education" action="confirmation.php" method='POST' data-parsley-validate>
        <div class="form-group">
                
   
        <label id="edu">Select highest level of education achieved</label>
        <br>

        <div class="block">
        <input type="radio" class="phoenix-save" id="hs" name="edu" 
        required data-parsley-group="edu" data-parsley-required value="High School" 
        data-parsley-error-message="Please select an education level"
        <?php if($_SESSION['edu']=='High School'){echo "checked='checked'";}?>>

        <label for="hs">High School</label><br>
        
        <input type="radio" class="phoenix-save" id="associate" name="edu" value="Associates"
        <?php if($_SESSION['edu']=='Associates'){echo "checked='checked'";}?>>

        <label for="associate">Associate's degree (AA, AS, AAS, AAS-T)</label><br>
        
        <input type="radio" class="phoenix-save" id="bachelor" name="edu" value="Bachelors"
        <?php if($_SESSION['edu']=="Bachelors"){echo "checked='checked'";}?>>
        <label for="bachelor">Bachelor's</label><br>
        
        <input type="radio" class="phoenix-save" id="master" name="edu" value="Masters"
        <?php if($_SESSION['edu']=="Masters"){echo "checked='checked'";}?>>

        <label for="master">Master's
        </label><br>
        </div>
        <br>
        
    <div class="row">
  
    <label for="collegecredits">How many college credits have you earned?
    <input type="number" class="form-control phoenix-save" id="collegecredits" min="0" name="numberofcredits" placeholder="0">
    </label>
    
  
        </div>
        <div class="checkbox">
        <br>
        <label for="verify">
        <input type="checkbox" name="verify" class="phoenix-save" id="verify" data-parsley-required data-parsley-error-message="Please check the box that you agree."> I verify that the information submitted here is accurate and complete.
        </label>
       
        </div>

    
       </div>

        <a class="btn btn-lg btn-primary" href="redirectus.php">Back</a>
        <button type="submit" id = "btnSubmit" name="submit" class="btn btn-lg btn-success">Next</button>

      <!--<div>-->
      </form>
      </div>
      </div>

      <div class = "col-xs-6" style ="padding-top:70px;">
      <p>Upload unofficial transcripts from any college other than Green River.</p>
         <form enctype="multipart/form-data" action="education.php" 
            method="POST">
         <input type="file" name="file">
         <br>
         <input type="submit" id="file-submit" name="file-submit" value="Upload">
       </form>
       </div>

       <?php 
       echo $error; 
       echo $success;
       ?>


      

      </div>      

        


   
      
<!--</div>-->
<!-- END Contact Info -->
      
  <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-2.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  <script src="js/parsley.min.js"></script>
  <script src="js/fileinput.min.js"></script>
  <!-- Phoenix - jQuery plugin that saves form state to Local Storage via HTML 5 -->
  <script src="js/jquery.phoenix.js" type="text/javascript"></script>

    <!-- Ignore the file-0 file-3 and file-4
        /*
        $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
            alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
        });
        -->
  <script>
  $('.phoenix-save').phoenix();
  </script>
  </body>
</html>