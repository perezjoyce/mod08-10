<?php require_once 'partials/header.php';?>

  <?php require_once 'partials/navbar.php';?>
   <?php session_start();?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          

        
      	<?php 
        	if(isset($_SESSION['user'])) { 
          		echo "<h1>Dashboard</h1>";
          	}else {
          		// echo "You have no permission to go to these files!";
          		header ("Location: login.php");
          	}
      	?>
          

        </div>
      </div>
    </div>

<?php require_once 'partials/footer.php';?>