<?php
	$dbhost	= "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "quiz";

	/*$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);*/

	/*if(mysqli_connect_errno()){ 
		die("Database Connection Failed" . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
	}*/
	$db = new mysqli ('localhost',$dbuser,$dbpass,$dbname) or die ("Unable to connect");

	echo "great work";

?>