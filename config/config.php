<?php
ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("Europe/London");

$url = parse_url(getenv("mysql://b00ef6920455e2:0fa25432@us-cdbr-east-06.cleardb.net/heroku_2fe7c99a07f0abd?reconnect=true"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$con = mysqli($server, $username, $password, $db);
//$con = mysqli_connect("us-cdbr-east-06.cleardb.net", "b00ef6920455e2", "0fa25432", "heroku_2fe7c99a07f0abd"); //Connection variable

if(mysqli_errno()) 
{
	echo "Failed to connect: " . mysqli_errno();
}

?>
