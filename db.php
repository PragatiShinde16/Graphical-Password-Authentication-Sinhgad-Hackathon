<?php 
	// $server="localhost";
	// $user="root";
	// $password="";
	// $database="gpas_final";
	// $con=mysqli_connect($server,$user,$password,$database);
	// if(!$con)
	// 	echo 'Connection failed !';

	$server="localhost";
	$user="root";
	$password="";
	$database="gpas_final";

	$con=mysqli_connect($server,$user,$password,$database);

	if(!$con){
		die("Connection failed!".mysqli_connect_error());
	}
	echo "Connected Successfully";
?>
	