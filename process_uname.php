<?php
// ================= ERROR MESSAGE WHEN INPUT FIELDS ARE LEFT BLANK ===============
// ================= ERROR WHEN REQUIRED LENGHT OF USERNAME IS NOT MET ===============
$uname = $_POST['uname'];
$countU = strlen($uname);

if($uname == "") {
    echo true;
} elseif ($countU >= 5 && $countU <=8) {
    echo 3;
} else {
    echo false;
}

?>