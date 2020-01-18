<?php
	include('conn.php');
	
	$id=$_POST['cashier'];
	$category=$_POST['category'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	
	mysqli_query($conn,"insert into product (name, price, id_category, id_cashier) values ('$name', '$price', '$category','$id')");
	header('location:index.php');

?>