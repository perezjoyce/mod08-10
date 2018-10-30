<?php require_once 'partials/header.php';?>

  <?php require_once 'partials/navbar.php';?>

    <div class="container">
      <div class="row">
      	<div class="col-lg-4 col-md-3 col-sm-1"></div>
        <div class="col-lg-4 col-md-6 col-sm-10">

        	<div class="card">
        		<div class="card-header">LOG IN FORM</div>
        		<div class="card-body">
		          	<form action="process_login.php" method="POST">
		          		<div class="form-group">
		          			<label>Username:</label>
			          		<input type="text" name="uname" class="form-control">
		          		</div>
			          		
			          	<div class="form-group">
		          			<label >Password:</label>
			          		<input type="password" name="pass" class="form-control">
		          		</div>

			          	<input type="submit" value="LOGIN" class="btn btn-lg btn-outline-primary">
		          	</form>
        		</div>
	        </div>
        </div>
      </div>
    </div>

<?php require_once 'partials/footer.php';?>