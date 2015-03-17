<?php



$servername = '192.185.191.5';
    $username='alex_brd15';
    $password='blackraindrops15';
    $dbname = "alex_bas";

// Try to connect to database and print out success message, 
// otherwise print out error 

try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }

// Define variables
$email = $_POST['inputEmail'];
$password = $_POST['inputPassword'];
$confirm = $_POST['inputConfPassword'];

$isValid = true;

    if ($email && $password) {

        $checkUser = $dbh->prepare("SELECT username FROM users WHERE username = :username");
        $checkUser->bindParam(':username', $email);
        
        $checkUser->execute();

        // Check if the user already exists  
        if ($checkUser->rowCount() > 0) {
            $error .= "<p class='errortext'> * There is already a user with that email. </p>";
            $isValid = false;
        }

        //$email = $username;

        // Check if password length exceeds 20 characters
        if( strlen($password) > 20 ) {
            $isValid=false;
            $error .= "<p class='errortext'> * Password too long! (Max 20) </p>";
        }
        
        // Check minimum password length 
        if( strlen($password) < 8 ) {
            $isValid=false;
            $error .= "<p class='errortext'>* Password too short! (Min 8)  </p>";
        }
        
        // Check that password contains a number
        if( !preg_match("#[0-9]+#", $password) ) {
            $isValid=false;
            $error .= "<p class='errortext'>* Password must include at least one number  </p>";
        }
        
        // Check that password contains one lowercase
        if( !preg_match("#[a-z]+#", $password) ) {
            $isValid=false;
            $error .= "<p class='errortext'>* Password must include at least one lowercase letter </p>";
        }

        //list($user, $domain) == explode('@', $email);
        //if ($domain == 'greenriver.edu')

        // Check if email contains @greenriver.edu 
        if (stristr($email, '@greenriver.edu') == FALSE) {
            $error .= "<p class='errortext'>* Email must contain @greenriver.edu </p>";
            $isValid = false;
        }
        //echo 'Email:' . $email;
        
        // Check if the first password matches the second password
        if ($password != $confirm) {
            $error .= "<p class='errortext'> * Passwords don't match </p>";
            $isValid = false;
        }

        //echo 'New Password: ' . $password;
        //echo 'Confirm password ' . $confirm;

        // Insert into database if there are no errors
        if ($isValid) {
            // Prepare SQL query
        $getUser = $dbh->prepare("INSERT INTO users (username, password) VALUES
            (:username, :password)");

        $getUser->bindParam(':username', $email);
        $getUser->bindParam(':password', $password);

        $getUser->execute();

        echo "New user added"; 
        }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Add User</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/parsley.css" rel="stylesheet">

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

      <?php include 'admin-nav.php'; ?>


    <div class="container">

        <div class="col-xs-6">

      <form class="form-adduser" method="POST" action="adduser.php" data-parsley-validate>
        <h2 class="form-adduser-heading">Please use this form to add a new user</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" 
        autofocus data-parsley-required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" 
        data-parsley-required>
        <input type="password" name="inputConfPassword" id="inputConfPassword" class="form-control" 
        placeholder="Confirm Password" data-parsley-required>
         <?php echo $error ?>
        
        <input name="submit" type="submit" value="Add user" class="btn btn-lg btn-primary btn-block">
      </form>

      </div>

    </div> <!-- /container -->

<script type="text/javascript" charset="utf-8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/parsley.min.js"></script>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
