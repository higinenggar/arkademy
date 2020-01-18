<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","arkademy");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>