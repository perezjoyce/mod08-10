<?php

// ================= ERROR MESSAGE WHEN INPUT FIELDS ARE LEFT BLANK ===============
// ================= ERROR MESSAGE WHEN PASSWORD < 8 CHARACTERS ===============
$pass = $_POST['pass'];
$countP = strlen($pass);

if($pass == "") {
    echo true;
} elseif ($countP < 8) {
   echo 3;
} else {
    echo false;
}
?>