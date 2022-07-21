<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">nama pelanggan</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama_pelangan" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">alamat :</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="alamat" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">longlat :</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="longlat" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">paket :</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="paket" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">sto :</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="sto" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">kontak sales :</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="kontak_sales" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">agency:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="agency" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">channel:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="channel" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">product:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="product" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">kodesales:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="kodesales" required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>