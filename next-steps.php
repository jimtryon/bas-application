<?php //include 'session.php';
      //include 'test.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Next Steps</title>
	<link rel="icon" href="../../favicon.ico">


	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/starter-template.css" rel="stylesheet">
	<link href="css/jsvalidate.css" rel="stylesheet">
	
	<!-- Parsley CSS -->
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
  		<h2>Next Steps</h2>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <input type="checkbox" name="next" value="apply">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  1. Apply to the college
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <p>If you haven't done so already, you will need to <a href="https://www.public.ctc.edu/ApplicantWebClient/Applicant/ApplWelcome.aspx" target="_blank">apply to Green River</a> in order to get an SID (Student Identification) number. 
                You will need your SID number for Online Services. Admission to the college is open to anyone who has a high school diploma, GED®, or is at least 18 years old. 
                Green River welcomes people of all income levels, backgrounds and previous educational experience.</p>
                <p class="small">Applying for readmission - Students who have not attended Green River for at least one quarter may reapply by calling Enrollment Services. 
                Once their record has been updated, they will be assigned a registration time. Only students who have earned credit at Green River in the past are eligible 
                to register as returning students.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <input type="checkbox" name="next" value="transcript">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  2. Submit all official transcripts
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
              <p>Send your official transcripts from all other colleges or programs to our Enrollment Services office.</p>
              <div class="alert alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                  <strong>Enrollment Services, Green River Community College,</strong><br>12401 SE 320th Street<br>Auburn, WA 98092-3622
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <input type="checkbox" name="next" value="evaluation">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  3. Complete a transcript evaluation form
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                Once they have been sent, you need to fill out the Transcript Evaluation Request: so that they can be officially evaluated and previous classes applied to your degree with us.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <input type="checkbox" name="next" value="email">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                   4. Activate your Green River email account
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
                Within two business days of applying online, check your email for notification of your student identification number (SID) and follow instructions 
                for setting up your <a href="http://grcc.greenriver.edu/student-email/" target="_blank">Green River-issued student email account.</a>
              </div>
            </div>
          </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive">
              <h4 class="panel-title">
                <input type="checkbox" name="next" value="finaid">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                  5. Apply for financial aid
                </a>
              </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
              <div class="panel-body">
                Go to <a href="https://fafsa.ed.gov" target="_blank">https://fafsa.ed.gov</a> and submit your FAFSA information. 
                You should be able to add Green River to your list of schools. Our Federal School Code is 003780.
                I am also attaching the link to our <a href="http://www.greenriver.edu/Documents/student-affairs/financial-aid/14-15-supplemental-financial-aid-application.pdf" 
                target="_blank">Green River Supplemental form</a> that must be filled out.  
                Get this filled out and turned in to the Financial Aid office as soon as possible.
                
                <br><br><br>  
                <!-- Table -->
                <table class="table">
                <tr>
                <th>Priority Deadline</th>
                <th>Quarter</th>
                </tr>
                <tr>
                  <td>March 15</td>
                  <td>Fall</td> 
                </tr>
                <tr>
                <td>October 15</td>
                  <td>Winter</td> 
                </tr>
                <tr>
                  <td>January 15</td>
                  <td>Spring</td> 
                </tr>
                <tr>
                  <td>April 15</td>
                  <td>Summer</td> 
                </tr>
              </table>
              
              </div>
            </div>
          </div>
          
        </div>
        

  	</div>

   

    <!-- Bootstrap core JavaScript -->
    <!-- ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="js/jquery-2.1.3.js"></script>
   <!-- <script src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>    -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parsley.min.js"></script>
	

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    
  
</body>
</html>
