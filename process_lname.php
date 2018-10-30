<?php

// ================= ERROR MESSAGE WHEN INPUT FIELDS ARE LEFT BLANK ===============
$lname = $_POST['lname'];

if($lname == "") {
    echo true;
} else {
    echo false;
}
?>