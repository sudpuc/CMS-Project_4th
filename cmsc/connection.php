<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "con_db";
$conn = mysqli_connect($host,$username,$password,$db);
if (!$conn) {
	echo "<script>alert('DB connection Fails')</script>";
	exit();
}
?>