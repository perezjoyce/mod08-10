<?php

// STEP 1: FETCH ALL DATA COMING FROM REGISTER.PHP using global variables

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

$countU = strlen($uname);
$countP = strlen($pass);

// STEP 2.1: PREPARE VALIDATION FOR EMPTY FIELDS 
if($fname == "") echo "<p style='color:red'>First name is empty!</p>"; 

if($lname == "") echo "<p style='color:red'>Last name is empty!</p>";

if($uname == "") {
	echo "<p style='color:red'>Username is empty!</p>"; 
} elseif ($countU >= 5 && $countU <= 8) {
	echo $uname;
} else {
	echo "<p style='color:red'>Username should be 5 to 8 characters.</p>";
}

//FILTER_VALIDATE_EMAIL --> as long as there is 1 character, @ symbol and domain (.com)
if($email == "") {
	echo"<p style='color:red'>Email is empty!</p>";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
	echo "Invalid email address";
}


if($pass == "") {
	echo "<p style='color:red'>Password is empty!</p>";
} elseif ($countP < 8 ) {
	echo "<p style='color:red'>Password should be at least 8 characters.</p>";
}

if($cpass == "") {
	echo "<p style='color:red'>Please confirm your password.</p>";
} elseif ($cpass !== $pass) {
	echo "<p style='color:red'>Passwords do not match.</p>";
}


// STEP 2.2: PREPAVE VALIDATINO FOR LENGTH
// if($countU >= 5 && $countU <= 8) {
// 	echo $uname;
// } elseif {
// 	echo "<p style='color:red'>Username should be 5 to 8 characters.</p>"; // WHITE HAT since it is focused on showing the corrrect
// }


// if($countP < 8 ) echo "Password should be at least 8 characters.<br>";


// STEP 2.4: PREPAVE VALIDATION FOR PASS AND CPASS
// if($cpass !== $pass) echo "Passwords do not match.<br>";



// STEP 3: FINISH
if ($fname == "" || $lname == "" || $uname == "" || $email == "" || $pass == "" || $cpass == "") {
	echo "<p style='color:red'>All fields are required!</p>";
}
else {
	echo $fname . "<br>";
	echo $lname . "<br>";
	echo $uname . "<br>";
	echo $email . "<br>";
}

?>