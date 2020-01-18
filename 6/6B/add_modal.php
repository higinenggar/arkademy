<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<center><form method="POST" action="addnew.php">
					<div class="row">
						<div class="col-lg-10">
						<div class="form-group">
							<select class="form-control" id="cashier">
							    <option value="1">Pevita Pearce</option>
								<option value="2">Raisa Andriana</option>
								<option value="3">Higin Enggartiasto</option>
								</option></select>
						</div>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-10">
						<div class="form-group">
							<select class="form-control" id="category">
							    <option value="1">Food</option>
								<option value="2">Drink</option>
								</option></select>
						</div>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-10">
							<input type="text" class="form-control" id="name">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-10">
							<input type="text" class="form-control" id="price">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form></center>
                </div>
				
            </div>
        </div>
    </div>
