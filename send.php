<?php require_once 'partials/header.php';?>

  <?php require_once 'partials/navbar.php';?>

    <div class="container">
      <div class="row">
      	<div class="col-lg-4"></div>
        <div class="col-lg-4">
          <form method="post" action="rcv.php">
          	<input type="text" name="fname">
          	<br>

          	Company:
          	<select name="company">
          		<option value="DC">DC</option>
          		<option value="MARVEL">MARVEL</option>
          	</select>
          	
          	<input type="submit" value="SUBMIT">
          	
          </form>

        </div>
      </div>
    </div>

<?php require_once 'partials/footer.php';?>