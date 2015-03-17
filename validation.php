<?php   //include 'test.php';
        //include_once 'redirectus.php';
        //Set to values
        
        // get the variables from the post array 
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $degree= $_POST['degree'];
        $sid= $_POST['sid'];
        $fnameErr= "";
        $lnameErr="";
        $emailErr="";
        $phoneErr="";
        
        // regex for email, telephone and sid
        $emailregex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        $telregex = '-\(\)/^\+?(\(?[0-9]{3}\)?|[0-9]{3})[-\.\s]?[0-9]{3}[-\.\s]?[0-9]{4}$/';
        $sidregex = '/[^0-9]/';
        
        // set to true by default 
        $isvalid = true;
        
        
        
    
        // validation for the index page
        if ($_SERVER["REQUEST_METHOD"] == "POST" && $_SERVER["PHP_SELF"] == 'index.php') {
            // if the first name isn't blank then run the validation code, 
            // otherwise ask for the first name
            if ($fname != '') {
                $name = sanitized_input($fname);
            } else {
                $fnameErr= "<p class='errortext'>* Please enter your first name.</p>";
                $isvalid=false;
                
            }
            // same as before, if the last name isn't blank then run the validation
            if ($lname != ''){
            $name = sanitized_input($lname);
            } else {
            $lnameErr= "<p class='errortext'>* Please enter your last name.</p>";
            $isvalid=false;
            }
            // check if the email passes validation
            if (!preg_match($emailregex, $email)) {
            $emailErr= "<p class='errortext'>* Invalid Email ID. </p>";
            $isvalid=false;
            }
            // check if the phone number is all digits
            if (!preg_match($telregex, $phone) == 1)
            {
            $phoneErr= "<p class='errortext'>* Please enter a valid phone number </p>";
            $isvalid=false;
            }
            
            // if all the value entered are valid then send the values
            // to the session array 
            if ($isvalid) {
            
            foreach ($_POST as $key => $value){
                $_SESSION[$key] = $value;
            }
                
           
            // set the next page as the tellusmore page`
                $destination_url = 'tellusmore.php';
                header("Location:$destination_url");
                exit();
            
            }
        }
        
    // validation for the tell us more page
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_SERVER["PHP_SELF"] == 'tellusmore.php') {
       
       
        // check for the sid if current student checkbox is checked
        if ($_POST['current'] == 'current student'){
            //var_dump($isvalid);
            if (empty($sid) || preg_match($sidregex, $sid) || strlen($sid) > 9 || strlen($sid) < 9){
                $sidErr = "<p class='errortext'>* Please enter your 9 digit GRCC Student ID </p>";
                $isvalid=false;
            }
        }
        
        
        // redirect to the next page 
        if ($isvalid){
            $destination_url = $pagedirect;
            header("Location:$destination_url");
            exit();
        }
        
        
    }

    //Sanitized data
    function sanitized_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    
?>