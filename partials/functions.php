<?php

	//ASSESS WITH STATIC DATA FOR NOW SINCE WE HAVEN'T STUDIED DATABASE YET
	function authenticate($user, $pass) {
		if ($user == "admin" && $pass == "secret") {
			return true;
		} else {
			return false;
		}
	}

?>