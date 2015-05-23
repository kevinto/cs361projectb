<?php
	session_start();
	if($_GET["add"] == 'cat'){
		$_SESSION["search"] = "cat";
	}
	elseif($_GET["add"] == 'dog'){
		$_SESSION["search"] = "dog";
	}
	echo "You have chosen: ";
	echo $_SESSION["search"];
?>