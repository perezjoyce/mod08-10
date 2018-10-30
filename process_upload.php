<?php

	$target_dir = "uploads/"; // folder

	//basename — Returns trailing name component of path
	//The global $_FILES will contain all the uploaded file information. 
	//['upload'] --> name of input
	// 	$_FILES['userfile']['name'] -- The original name of the file on the client machine.
	$target_file = $target_dir . basename($_FILES['upload']['name']);

	// move_uploaded_file -- Function that grabs and moves choosen file to uploads folder
	// tmp_name -- PHP is a server-side scripting language that generates its own temp name. this is overriden by $target_file hence orig name is retained
	
	// TO LIMIT WHAT TYPE OF FILE EXTENSION IS ALLOWED
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	echo $imageFileType;

	//VALIDATION
	// 3 IFs SO THAT EACH CONDITION WILL BE CHECKED if you change the other two into elseif, they won't be assessed when if is not satisfied

	// to prevent uploading the sample filename more than once
	if(file_exists($target_file)){
		echo "Sorry, file already exists.";
	}
	// to limit file size to 1 MB
	if ($_FILES['upload']['size'] > 100000) {
		echo "Sorry, your file is too large.";
	} 

	// to limit type of files 
	if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg') {
		echo "Only JPG, JPEG and PNG Files are allowed!";
	}

	else {
		move_uploaded_file($_FILES['upload']['tmp_name'], $target_file);
	}


?>