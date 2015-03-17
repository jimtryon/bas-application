<?php session_start();
//session arrays stored from POST arrays

if(isset($_POST['fname'])){
    $_SESSION['fname'] = $_POST['fname'];
}
if(isset($_POST['lname'])){
    $_SESSION['lname'] = $_POST['lname'];
}
if(isset($_POST['email'])){
    $_SESSION['email'] = $_POST['email'];
}
if(isset($_POST['phone'])){
    $_SESSION['phone'] = $_POST['phone'];
}
if(isset($_POST['degree'])){
    $_SESSION['degree'] = $_POST['degree'];
}
if(isset($_POST['current'])){
    $_SESSION['current'] = $_POST['current'];
}

if(isset($_POST['sid'])){
    $_SESSION['sid'] = $_POST['sid'];
}

if(isset($_POST['vet'])){
    $_SESSION['vet'] = $_POST['vet'];
}

if(isset($_POST['international'])){
    $_SESSION['international'] = $_POST['international'];
}

if(isset($_POST['runningstart'])){
    $_SESSION['runningstart'] = $_POST['runningstart'];
}

if(isset($_POST['comments'])){
    $_SESSION['comments'] = $_POST['comments'];
}

if(isset($_POST['network_prereq1'])){
    $_SESSION['network_prereq1'] = $_POST['network_prereq1'];
}

if(isset($_POST['network_prereq2'])){
    $_SESSION['network_prereq2'] = $_POST['network_prereq2'];
}

if(isset($_POST['network_prereq3'])){
    $_SESSION['network_prereq3'] = $_POST['network_prereq3'];
}

if(isset($_POST['network_prereq4'])){
    $_SESSION['network_prereq4'] = $_POST['network_prereq4'];
}

if(isset($_POST['software_prereq1'])){
    $_SESSION['software_prereq1'] = $_POST['software_prereq1'];
}

if(isset($_POST['software_prereq2'])){
    $_SESSION['software_prereq2'] = $_POST['software_prereq2'];
}

if(isset($_POST['software_prereq3'])){
    $_SESSION['software_prereq3'] = $_POST['software_prereq3'];
}

if(isset($_POST['software_prereq4'])){
    $_SESSION['software_prereq4'] = $_POST['software_prereq4'];
}

if(isset($_POST['edu'])){
    $_SESSION['edu'] = $_POST['edu'];
}

if(isset($_POST['numberofcredits'])){
    $_SESSION['numberofcredits'] = $_POST['numberofcredits'];
}

if(isset($_POST['verify'])){
    $_SESSION['verify'] = $_POST['verify'];
}

// file upload
if(isset($_FILES['file']['name'])) {
    $_SESSION['fileinfo'] = basename(trim(str_replace(' ', '_', $_FILES["file"]["name"])));
}


?>