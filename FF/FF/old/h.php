<?php
	session_start();
	if($_GET["add"] == 'cat'){
		$_SESSION["add"] = "cat";
	}
	elseif($_GET["add"] == 'dog'){
		$_SESSION["add"] = "dog";
	}
?>
