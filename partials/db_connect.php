<?php
$server = "localhost:3307";
$username = "root";
$password = "";
$database = "crime_station";

$conn = mysqli_connect($server,$username,$password,$database);
if (!$conn) {
	die("error---->".mysqli_error());
}
?>