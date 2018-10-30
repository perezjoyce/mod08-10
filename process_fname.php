<?php

// ================= ERROR MESSAGE WHEN INPUT FIELDS ARE LEFT BLANK ===============

$fname = $_POST['fname'];

if($fname == "") {
    echo true;
} else {
    echo false;
}
?>