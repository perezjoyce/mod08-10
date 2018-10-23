<?php

// STEP 1: FETCH ALL DATA COMING FROM REGISTER.PHP using global variables

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

// STEP 2.1: PREPARE VALIDATION FOR EMPTY FIELDS 
if($fname == "") echo "First name is empty!<br>"; 
if($lname == "") echo "Last name is empty!<br>";
if($uname == "") {
	echo "Username is empty!<br>"; 
} elseif (strlen($uname) >= 5 && strlen($uname) <= 8) {
	echo "Username should be 5 to 8 characters.<br>";
}

if($email == "") {
	echo "Email is empty!<br>";
} elseif (!strpos($email, '@') && !strpos($email, 'com')) {
	echo "Please use a valid email address.<br>"
}

	
if($pass == "") {
	echo "Password is empty!<br>";
} elseif (strlen($pass) < 8 ) {
	echo "Password should be at least 8 characters.<br>";
}

if($cpass == "") {
	echo "Please confirm your password.<br>";
} elseif ($cpass !== $pass) {
	echo "Passwords do not match.<br>";
}


// STEP 2.2: PREPAVE VALIDATINO FOR LENGTH
// if(strlen($uname) >= 5 && strlen($uname) <= 8) echo "Username should be 5 to 8 characters.<br>";
// if(strlen($pass) < 8 ) echo "Password should be at least 8 characters.<br>";

// STEP 2.4: CHECK IF EMAIL IS VALID -- SIR WILL TEACH A BETTER TECHNIQUE
// if(!strpos($email, '@') && !strpos($email, 'com')) echo "Please use a valid email address.<br>"


// STEP 2.4: PREPAVE VALIDATION FOR PASS AND CPASS
// if($cpass !== $pass) echo "Passwords do not match.<br>";



?>