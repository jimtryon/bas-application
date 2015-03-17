<?php include 'session.php'; 
     include 'validation.php'; 
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
	<link rel="icon" href="../../favicon.ico">

	<title>IT BAS Application</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Parsley CSS -->
  <link href="css/parsley.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/starter-template.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="ie-emulation-modes-warning.js"></script>
   <script src="js/jquery-2.1.3.js"></script>
 
 <!-- deletion? -->
 <!--<script src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>  -->  
 <script src="js/bootstrap.min.js"></script>
 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 <script src="ie10-viewport-bug-workaround.js"></script>
 <script type="text/javascript" src="js/ext-all-debug.js"></script>
 <script>
 // hides the student ID
 

// validation for text field and new student
$(function () {
  $("#btnSubmit").click(function(){
    //var NewStudent = jQuery("input[name=status]:checked").val();
   // var CurrStudent = jQuery("input[name=current]:checked").val();
   var radio1 = document.getElementById("r1").checked;
   var radio2 = document.getElementById("r2").checked;
   var sid = document.getElementById("sid").value;
   var isEnabled = false;
   if (radio1 == true ) {
    //if(sid === 9) {
      
      isEnabled = false;

      if (sid != "" && $.isNumeric(sid) && sid.length == "9") {
        isEnabled = true;
    document.getElementById("students").submit();
      }
     
     
   
    }
   if (isEnabled == true || radio2 == true ) {

    document.getElementById("students").submit();
    }

    if (radio1 != true && radio2 != true ) {
    alert("Please select 'New Student' or 'Current Student' field");

    }

return true;

  

  });
});


</script>

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
  <h2>Tell Us More</h2>
  <div class = "form-group" id="error">
  </div>
  
  <form class ="form" id ="students" action="redirectus.php" method="POST" data-parsley-validate>

    <label id ="select1">Please Select One:</label>
    <div class="radio" role="radiogroup">
      <label>
        <input type="radio" name="current" value="current student" id="r1" aria-checked="true" <?php if ($_SESSION['current']=='current student'){echo 'checked';} ?>>
        I am currently a student at Green River
      </label>

    </div>
    
    <div class="text">
      <input class="form-control" type="text" name="sid" id="sid" placeholder="Student ID #" maxlength = "9" autocomplete="off" 
      title ="Enter your 9 digit student ID" data-parsley-trigger="blur" data-parsley-pattern="^[0-9]+$" 
      data-parsley-type="digits" 
  		data-parsley-minlength="9" data-parsley-required
  		data-parsley-error-message="Please enter your 9 digit GRCC student ID" 
      <?php if ($_SESSION['sid']){echo "value='" . $_SESSION['sid'] . "'";} ?>>
    </div>

    <?php echo $sidErr; ?>
    <div class="radio">
      <label>
        <input type="radio" name="current" value="new student" id="r2" <?php if ($_SESSION['current']=='new student'){echo 'checked';} ?>>        
        I am a new student
      </label>
    </div>

    <label id="select2">I am a (please check all that apply): </label>
    <div class="checkbox">
      <label>
        <input type="checkbox" name="vet" id="vet" value ="1" <?php if ($_SESSION['vet']=='1'){echo 'checked';} ?>> Veteran
      </label>
    </div>


    <div class="checkbox">
      <label>
        <input type="checkbox" name="international" id="international" value="1" <?php if ($_SESSION['international']=='1'){echo 'checked';} ?>> International student
      </label>
    </div>

    <div class="checkbox">
      <label>
        <input type="checkbox" name="runningstart" id="runningstart" value="1" <?php if ($_SESSION['runningstart']=='1'){echo 'checked';} ?>> Running Start student
      </label>
    </div>
 
  
    <a class="btn btn-lg btn-primary" href="index.php">Back</a>
    <button id ="btnSubmit" type="submit" class="btn btn-lg btn-success" >Next</button>

    
  </form>



</div>
<!--</div>-->
<!-- END Contact Info -->



 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
<script src="js/parsley.min.js"></script>
<script>
$(document).ready(function () {

// Hide student ID by default
  $(".text").hide();
  
  $("#r1").click(function () {
    $(".text").show();
  });
});
 $("#r2").click(function () {
  $(".text").hide();
});
</script>

</body>
</html>
