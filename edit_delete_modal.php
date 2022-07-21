<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id_pelanggan']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id_pelanggan" value="<?php echo $row['id_pelanggan']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">nama pelanggan:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama_pelangan" value="<?php echo $row['nama_pelangan']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Alamat :</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">longlat :</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="longlat" value="<?php echo $row['longlat']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">paket :</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="paket" value="<?php echo $row['paket']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">sto:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="sto" value="<?php echo $row['sto']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">kontak sales:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="kontak_sales" value="<?php echo $row['kontak_sales']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">agency :</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="agency" value="<?php echo $row['agency']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">channel:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="channel" value="<?php echo $row['channel']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">product:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="product" value="<?php echo $row['product']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">kodesales:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="kodesales" value="<?php echo $row['kodesales']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id_pelanggan']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['id_pelanggan'].' '.$row['alamat']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id_pelanggan=<?php echo $row['id_pelanggan']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>