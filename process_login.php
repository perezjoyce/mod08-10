
  <?php require_once 'partials/functions.php'; ?> // FOR AUTHETICATION 	
  <?php session_start();?>

  <?php
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    
    if(authenticate($user, $pass) == ""){
      return true;
    }elseif(authenticate($user, $pass) == true) {
      return 3;
    }else {
      return false;
    }
  ?>

  