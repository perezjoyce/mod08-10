<?php require_once 'partials/header.php';?>

  <?php require_once 'partials/navbar.php';?>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-3 col-sm-1"></div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          
          <form action="process_registration.php" method="POST">
          	<div class="form-group">
          		<label for="fname">First Name</label>
          		<input type="text" class="form-control" name="fname"></input>
          	</div>

          	<div class="form-group">
          		<label for="lname">Last Name</label>
          		<input type="text" class="form-control" name="lname"></input>
          	</div>

          	<div class="form-group">
          		<label for="uname">User Name</label>
          		<input type="text" class="form-control" name="uname"></input>
          	</div>

          	<div class="form-group">
          		<label for="email">Email</label>
          		<input type="text" class="form-control" name="email"></input>
          	</div>


          	<div class="form-group">
          		<label for="pass">Password</label>
          		<input type="password" class="form-control" name="pass"></input>
          	</div>

          	<div class="form-group">
          		<label for="cpass">Confirm Password</label>
          		<input type="password" class="form-control" name="cpass"></input>
          	</div>

          	<input type="submit" value="SUBMIT" class="btn btn-lg btn-success">
          </form>

        </div>
      </div>
    </div>

<?php require_once 'partials/footer.php';?>