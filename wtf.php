<?php 
    
        include 'test.php';
        //Set to values
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $degree= $_POST['degree'];
        $sid= $_POST['sid'];
        $emailregex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        $telregex = '/^\+?(\(?[0-9]{3}\)?|[0-9]{3})[-\.\s]?[0-9]{3}[-\.\s]?[0-9]{4}$/';
        $isvalid = true;
        echo "this is vali";
        var_dump($isvalid);
        
    
        //First name and last name validation
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            if ($fname != '') {
                $name = sanitized_input($fname);
            } else {
                $fnameErr= "<p class="errortext">* Please enter your first name.</p>";
                $isvalid=false;
                
            }
        
            if ($lname != ''){
            $name = sanitized_input($lname);
            } else {
            $lnameErr= "<p class="errortext">* Please enter your last name.</p>";
            $isvalid=false;
            }
        
            if (!preg_match($emailregex, $email)) {
            $emailErr= "<p class="errortext">* Invalid Email ID. </p>";
            $isvalid=false;
            }
            
            if (!preg_match($telregex, $phone) == 1)
            {
            $phoneErr= "<p class="errortext">* Please enter a valid phone number </p>";
            $isvalid=false;
            }
        }
        /*
        if ($isvalid) {
            $destination_url = "process.php?frisbees=$frisbees&giant_chew_ropes=$giant_chew_ropes";
            header("Location:$destination_url");
            exit();
        }
        */

    //Sanitized data
    function sanitized_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    
?>