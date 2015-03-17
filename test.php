<?php 
    error_reporting(E_ALL);
    print session_id();
    echo "<br>";
    echo "post array: ";
    print "<pre>";
     print_r($_POST);
     print "</pre>";
    echo "session array: ";
     print "<pre>";
     print_r($_SESSION);
     print "</pre>";


?>