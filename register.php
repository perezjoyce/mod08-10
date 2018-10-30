<?php require_once 'partials/header.php';?>

  <?php require_once 'partials/navbar.php';?>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-3 col-sm-1"></div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <div class="card">
						<div class="card-body">
         
							<div class="form-group">
								<label for="fname">First Name</label>
								<input type="text" class="form-control" id="fname">
								<p id="error_fname" class="error text-danger"></p>
							</div>

							<div class="form-group">
								<label for="lname">Last Name</label>
								<input type="text" class="form-control" id="lname">
								<p id="error_lname" class="error text-danger"></p>
							</div>

							<div class="form-group">
								<label for="uname">User Name</label>
								<input type="text" class="form-control" id="uname">
								<p id="error_uname" class="error text-danger"></p>
							</div>

							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" class="form-control" id="email">
								<p id="error_email" class="error text-danger"></p>
							</div>


							<div class="form-group">
								<label for="pass">Password</label>
								<input type="password" class="form-control" id="pass">
								<p id="error_pass" class="error text-danger"></p>
							</div>

							<div class="form-group">
								<label for="cpass">Confirm Password</label>
								<input type="password" class="form-control" id="cpass">
								<p id="error_cpass" class="error text-danger"></p>
							</div>
					</div>
					<div class="card-footer">

							<input type="submit" value="SUBMIT" class="btn btn-block btn-outline-success">
					</div>
					</div>

        </div>
      </div>
    </div>

<?php require_once 'partials/footer.php';?>