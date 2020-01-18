<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from cashier where id='".$row['id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Nama: <strong><?php echo $drow['name']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <left><h1 class="modal-title" id="myModalLabel">Edit</h1></left>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select cashier.id as id, cashier.name as nama, product.name as produk, category.name as kategori, product.price as harga from cashier LEFT JOIN product ON cashier.id=product.id_cashier LEFT JOIN category ON category.id = product.id_category where  cashier.id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Nama:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="nama" class="form-control" value="<?php echo $erow['nama']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Product:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="produk" class="form-control" value="<?php echo $erow['produk']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Catrgory:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="kategori" class="form-control" value="<?php echo $erow['kategori']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Price:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="harga" class="form-control" value="<?php echo $erow['harga']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->