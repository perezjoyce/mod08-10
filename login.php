<?php require_once 'partials/header.php';?>

  <?php require_once 'partials/navbar.php';?>
	<?php session_start();?>

    <div class="container">
      <div class="row">
      	<div class="col-lg-4 col-md-3 col-sm-1"></div>
        <div class="col-lg-4 col-md-6 col-sm-10">

        	<div class="card">
        		<div class="card-body">
							<div class="form-group">
								<label>Username:</label>
								<input type="text" name="uname" class="form-control">
								<p id="error_uname" class="error text-danger"></p>
							</div>
								
							<div class="form-group">
								<label >Password:</label>
								<input type="password" name="pass" class="form-control">
								<p id="error_pass" class="error text-danger"></p>
							</div>
						</div>

						<div class="card-footer">
			        <input type="submit" value="LOGIN" class="btn btn-block btn-outline-primary" id="btnLogIn">
        		</div>
	        </div>
        </div>
      </div>
    </div>

<?php require_once 'partials/footer.php';?>