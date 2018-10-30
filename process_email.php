<?php

// ================= ERROR MESSAGE WHEN INPUT FIELDS ARE LEFT BLANK ===============
// ================= ERROR MESSAGE WHEN EMAIL HAS WRONG FORMAT ===============
$email = $_POST['email'];

if($email == "") {
    echo true;
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL)){
   echo 3;
} else {
    echo false;
}
?>

