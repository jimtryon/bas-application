<?php 
session_start();

$servername = '192.185.191.5';
    $username='alex_brd15';
    $password='blackraindrops15';
    $dbname = "alex_bas"; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }

    // Define parameters 
    $username = $_POST['inputEmail'];
    $password = $_POST['inputPassword'];
    $datatable = $_POST['datatable'];

    // Pull username from the database
    $stmt = $conn->prepare("SELECT `id` FROM `users` WHERE `username` = :inputEmail AND 
        `password` = :inputPassword");
    $stmt->bindParam(':inputEmail', $username);
    $stmt->bindParam(':inputPassword', $password);
    $stmt->execute();

    if ($datatable) {

        // Return the number of rows
    if ($stmt->fetchColumn() > 0) {
        

        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        
        // Redirect the user to data table page
        header('Location:datatable.php');

        //exit();

        //echo 'Datatable';
    } 
    else {
        //echo 'Something else';
        header('Location:login.php');
        //exit();
    }

}



    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DataTables Demo</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/f2c75b7247b/integration/jqueryui/dataTables.jqueryui.css">


  
<!-- jQuery -->
<script type="text/javascript" charset="utf-8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  
<!-- DataTables -->
<script type="text/javascript" charset="utf-8" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


      <!-- Include the navigation bar -->
     <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">IT BAS Application</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Tools</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="logout.php">Logout</a></li>
              <li><a href="adduser.php">Add new user</a></li>
              <li><a href="pass-reset.php">Change password</a></li>
            </ul>
          </ul>
        </div><!-- /.nav-collapse -->
        </div>
    </nav>

    <!-- Main content area -->
    <div class="container">
      
      <h3 class="text-muted">Applicants </h3>

      <table id="myTable" class="row-border table-striped">
        <thead>
            <tr>
                <th>Application Date</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone #</th>
                <th>Degree</th>
                <th>Student Status</th>
                <th>Student ID#</th>
                <th>Veteran </th>
                <th>International</th>
                <th>Running Start</th>
                <th>S/W PreReq1</th>
                <th>S/W PreReq2</th>
                <th>S/W PreReq3</th>
                <th>S/W PreReq4</th>
                <th>N/W PreReq1</th>
                <th>N/W PreReq2</th>
                <th>N/W PreReq3</th>
                <th>N/W PreReq4</th>
                <th>Comments</th>
                <th>Edu</th>
                <th>Number of Credits</th>
                <th>Signature</th>
                <th>Transcript</th>
            </tr>
        </thead>
 
        
 
        <tbody>
            
            <?php include 'db.php';
            foreach ($users as $user) {
                echo '<tr>';
                echo '<td>' . $user['date'] . '</td>';
                 echo '<td>' . $user['fname'] . '</td>';
                 echo '<td>' . $user['lname'] . '</td>';
                 echo '<td>' . $user['email'] . '</td>';
                 echo '<td>' . $user['phone'] . '</td>';
                 echo '<td>' . $user['degree'] . '</td>';
                 echo '<td>' . $user['current'] . '</td>';
                 echo '<td>' . $user['sid'] . '</td>';
                 echo '<td>' . $user['vet'] . '</td>';
                 echo '<td>' . $user['international'] . '</td>';
                 echo '<td>' . $user['runningstart'] . '</td>';
                 echo '<td>' . $user['software_prereq1'] . '</td>';
                 echo '<td>' . $user['software_prereq2'] . '</td>';
                 echo '<td>' . $user['software_prereq3'] . '</td>';
                 echo '<td>' . $user['software_prereq4'] . '</td>';
                 echo '<td>' . $user['network_prereq1'] . '</td>';
                 echo '<td>' . $user['network_prereq2'] . '</td>';
                 echo '<td>' . $user['network_prereq3'] . '</td>';
                 echo '<td>' . $user['network_prereq4'] . '</td>';
                 echo '<td>' . $user['comments'] . '</td>';
                 echo '<td>' . $user['edu'] . '</td>';
                 echo '<td>' . $user['numberofcredits'] . '</td>';
                 echo '<td>' . $user['verify'] . '</td>';
                 ?>
                <td> <a href=" <?php echo $user['content']; ?>"> <?php echo $user['content']; ?> </a></td>

                 
                 </tr>
                <?php  
                }
            ?>
            
            
            
        </tbody>
    </table>
      
      <!-- Footer -->
      <hr>
      <footer>
        <p>&copy; Black Rain Drops 2014</p>
      </footer>
      
    </div>
  
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
     $(document).ready( function () {
    $('#myTable').DataTable({
      "scrollX": true,
      "scrollCollapse": true,
      "jQueryUI":       true
    });
} );
    </script>
    
  </body>
</html>
