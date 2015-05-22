<?php
	include "h.php";
	session_start();
	echo "You have chosen: ";
	echo $_SESSION["add"];
?>