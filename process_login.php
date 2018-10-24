<?php require_once 'partials/header.php';?>

  <?php require_once 'partials/navbar.php';?>
  <?php require_once 'partials/functions.php'; // FOR AUTHETICATION ?>	

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-3 col-sm-1"></div>
        <div class="col-lg-4 col-md-6 col-sm-10">
         	<?php

          	// FETCH AND PASS TO VARIABLES
	          $uname = $_POST['uname'];
	          $pass = $_POST['pass'];

	          if(authenticate($uname, $pass)) { // IF TRUE (authenticate($user,$pass) == true)
	          	header ("Location: home.php"); // If the credential is right, you will be redirected to home page
	          }else {
	          	echo "Wrong credentials!";
	          }

          ?>

        </div>
      </div>
    </div>

<?php require_once 'partials/footer.php';?>