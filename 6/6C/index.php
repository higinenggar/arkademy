<!DOCTYPE html>
<html>
<head>
	<title>PHP/MySQLi CRUD Operation using Bootstrap/Modal</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:100%;">
		<span class="pull-left"><img src="arkademy.jpg"></span>
		<span class="pull-right"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		<div style="height:50px;"></div>
		<table class="table">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Cashier</th>
				<th>Product</th>
				<th>Category</th>
				<th>Price</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
			<?php
				include('conn.php');
				
				$query=mysqli_query($conn,"select cashier.id as id, cashier.name as nama, product.name as produk, category.name as kategori, product.price as harga from cashier LEFT JOIN product ON cashier.id=product.id_cashier LEFT JOIN category ON category.id = product.id_category ORDER BY cashier.id ASC");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['nama']; ?></td>
						<td><?php echo $row['produk']; ?></td>
						<td><?php echo $row['kategori']; ?></td>
						<td><?php echo $row['harga']; ?></td>

						
						<td>
							<a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?>
</div>
</body>
</html>