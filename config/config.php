<?php
ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect("@us-cdbr-east-06.cleardb.net", "b00ef6920455e2", "0fa25432", "heroku_2fe7c99a07f0abd"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>
