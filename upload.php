<?php require_once 'partials/header.php';?>

  <?php require_once 'partials/navbar.php';?>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4"></div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="card">
          	<div class="card-header">FILE UPLOAD</div>
          	<div class="card-body">
          		<form action="process_upload.php" method="POST" enctype="multipart/form-data">
          			<div class="form-group">
          				<label>CHOOSE FILE</label>
          				<input type="file" name="upload">
          			</div>
          			
          		
          			<input type="submit" value="SUBMIT" class="btn btn-lg btn-outline-success">
          		</form>
          	</div>
          </div>

        </div>
      </div>
    </div>

<?php require_once 'partials/footer.php';?>