<?php 

	session_start(); // INITIATE
	session_destroy(); // Destroys all data registered to a session
	header("Location: login.php"); // redirected to login.php

?>