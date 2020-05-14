<?php
ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("Europe/London");

$url = parse_url(getenv("mysql://b00ef6920455e2:0fa25432@us-cdbr-east-06.cleardb.net/heroku_2fe7c99a07f0abd?reconnect=true"));

$server = $url["us-cdbr-east-06.cleardb.net"];
$username = $url["b00ef6920455e2"];
$password = $url["0fa25432"];
$db = substr($url["heroku_2fe7c99a07f0abd"], 1);

$conn = mysqli_connect($server, $username, $password, $db);
//$con = mysqli_connect("us-cdbr-east-06.cleardb.net", "b00ef6920455e2", "0fa25432", "heroku_2fe7c99a07f0abd"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>
