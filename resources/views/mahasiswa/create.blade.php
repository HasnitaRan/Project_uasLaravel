
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="/mahasiswa/store" method="POST">
                @csrf
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nama</label>
						<input type="name" name="nama" class="form-control" required>
					</div>
					<div class="form-group">
						<label>NIM</label>
						<input type="nim" name="nim" class="form-control" required>
					</div>
                    <div class="form-group">
						<label>Jenis Kelamin</label>
						<input type="gender" name="jenis_kelamin" class="form-control" required>
					</div>
                    <div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="birth" name="tanggal_lahir" class="form-control" required>
					</div>
                    <div class="form-group">
						<label>Nomer Handphone</label>
						<input type="text" name="no_hp" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea name="alamat" class="form-control" required></textarea>
					</div>
										
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
