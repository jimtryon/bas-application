<?php 
    include_once 'db.php';
    include 'session.php';
    
    // change this to the user's email address
    $accountname = $_SESSION['username'];


    
    // if the hidden value for this form is set 
    if (!empty($_POST['pass-reset-form'])) {
        
        
        
        $conn = new PDO('mysql:host=192.185.191.51;dbname=alex_bas', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $conn->prepare("SELECT * FROM `users` WHERE `username`=:username LIMIT 1"); 
        
        $stmt->bindParam(':username', $accountname);
        
        $stmt->execute();
        
        $users = $stmt->fetch(PDO::FETCH_ASSOC);
        $storedpass=$users['password'];
        
        
        
        // get the current entered password
        $currentpass = $_POST['currentpass'];
        // get the new password
        $newpass = $_POST['newpass'];
        // get the confirmed new password
        $confirmpass = $_POST['confirmpass'];
        // valid flag 
        $isValid = true;
        
        

       
        
        
        if( strlen($newpass) > 20 ) {
            $isValid=false;
        	$error .= "<p class='errortext'>* Password too long! (Max 20) </p>
        ";
        }
        
        if( strlen($newpass) < 8 ) {
            $isValid=false;
        	$error .= "<p class='errortext'>* Password too short! (Min 8)  </p>
        ";
        }
        
        if( !preg_match("#[0-9]+#", $newpass) ) {
            $isValid=false;
        	$error .= "<p class='errortext'>* Password must include at least one number  </p>
        ";
        }
        
        
        if( !preg_match("#[a-z]+#", $newpass) ) {
            $isValid=false;
        	$error .= "<p class='errortext'>* Password must include at least one lowercase letter  </p>
        ";
        }
        
        
        if( !preg_match("#[A-Z]+#", $newpass) ) {
            $isValid=false;
        	$error .= "<p class='errortext'>* Password must include at least one uppercase letter </p>
        ";
        }
        
        
        
        if( !preg_match("#\W+#", $newpass) ) {
            $isValid=false;
        	$error .= "<p class='errortext'>* Password must include at least one symbol  </p>
        ";
        }
        
        
        
        
        // check the entered current password against the stored (db) password
        if ($currentpass != $storedpass) {
            $isValid=false;
            $currenterror = "<p class='errortext'>* Incorrect current password</p>";
            
        }
        
        // check if the new password matches the confirm password field
        if ($confirmpass != $newpass){
            $isValid = false;
            $confirmerror= "<p class='errortext'>* Passwords don't match</p>";
           
        }
        
        if($isValid){
            
            $conn = new PDO('mysql:host=192.185.191.51;dbname=alex_bas', $username, $password);
            
            
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // prepare sql and bind parameters
            $stmt = $conn->prepare("UPDATE `alex_bas`.`users` SET `password`=:newpass WHERE `username`=:user");
            
            $stmt->bindParam(':newpass', $newpass);
            $stmt->bindParam(':user', $accountname);
            
            
            $stmt->execute();
            
             $success = "<p class='errortext'> * Password changed successfully</p>"; 
            
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
      <link rel="icon" href="../../favicon.ico">
      <title>Password Change Form</title>
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
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
  	<?php include 'admin-nav.php'; ?>
      <div class="container">
         <h2>Password Reset</h2>
         <form id ="passwordReset" action="pass-reset.php" name ="passwordReset" autocomplete="off" method="POST" data-parsley-validate>
           <div class ="row">
               
            <div class="col-xs-6">
                <?php echo $success; ?>
                <label class ="sr-only" id="current" for="currentpass">Current Password</label>
                 <input type="password" id="currentpass" name="currentpass" placeholder="Current Password"
                 class="form-control" autofocus data-parsley-trigger="blur" required 
                 data-parsley-error-message="Please enter your current password"><br>
                 <?php echo $currenterror; ?>
                 
                 
           
                 <label class ="sr-only" id="new" for="newpass">New Password</label>
                 <input type="password" id="newpass" name="newpass" placeholder="New Password"
                 class="form-control" data-parsley-trigger="blur" required pattern=".{8,20}" 
                 data-parsley-error-message="Please enter your new password"><br>
                 <?php echo $error; ?>
                 
           
               <label class ="sr-only" id="confirm" for="confirmpass">Confirm New Password</label>  
               <input type="password" id ="confirmpass" name="confirmpass" placeholder = "Confirm New Password"
               class="form-control"  data-parsley-trigger="blur" required
               pattern=".{8,20}" 
                data-parsley-error-message="Please confirm your new password"><br>
               <?php echo $confirmerror; ?>
                <input type="hidden" name="pass-reset-form" value="pass-reset">
            </div>
        </div>
        
         
  					<div class="bg-warning deadline">

  						<h4>New password must be 8-20 characters and include: </h4>
                        <ul>
                            <li>1 number </li>
                            <li>1 lowercase letter</li>
                            <li>1 uppercase letter</li>
                            <li>1 symbol</li>
                        </ul>

  					</div>
  		
            <button type="submit" id="changepass" class="btn btn-lg btn-primary">Submit</button>
        </form>       
  				
  		
      </div>
      <!-- /.container -->
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="js/jquery-2.1.3.js"></script>
      <script src="js/parsley.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="js/ie10-viewport-bug-workaround.js"></script>
   </body>
</html>