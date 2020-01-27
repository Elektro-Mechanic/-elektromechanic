<?php
/* declaring variables for connecting using $conn
name of the server*/
$servername = "localhost";
//username for the database
$dbUsername = "EK1580";
//password for the database
$dbPassword = "1580qew501825";
//name of the database
$dbName = "EKloginsystem";

//connect to server
$conn = mysqli_connect($servername,  $dbUsername, $dbPassword, $dbName);

//error message for a failed connection
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}