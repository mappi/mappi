<?php include('header.php'); ?>

<!-- Page Header -->
<div class="page_header">
	<div>
		<i class="icon ti-user page_header_icon"></i>
		<span class="main-text">Tambah User</span>
	</div>
</div>
<!-- /pageheader -->

<!--main content-->
<div class="main-content">
	<!--theme panel-->
	<div class="panel">
		<div class="panel-body">
			<!--form-heading-->
			<div class="form-heading">Tambah User</div>

			<div class="col-md-12">
				<div class="alert alert-danger">
					<ul>
						<li>Username harus diisi</li>
						<li>Password harus diisi</li>
						<li>Nama lengkap harus diisi</li>
						<li>Alamat harus diisi</li>
						<li>No HP harus diisi</li>
						<li>Jenis kelamin harus dipilih</li>
						<li>Pendidikan terakhir harus dipilih</li>
						<li>Status harus dipilih</li>
					</ul>
				</div>
				<div class="alert alert-success">
					User berhasil diinput
				</div>
			</div>
			<!--form-heading-->
			<form class="form" method="post">
				<div class="col-md-12">
					<!--Default Form-->
					<div class="form-group">
						<label class="control-label">Username:</label>
						<input type="text" class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label class="control-label">Password:</label>
						<input type="text" class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label class="control-label">Nama Lengkap:</label>
						<input type="text" class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label class="control-label">Alamat:</label>
						<textarea name="" class="form-control text-area"></textarea>
					</div>
					<div class="form-group">
						<label class="control-label">No HP:</label>
						<input type="text" class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label class="control-label">Jenis Kelamin:</label>
						<select class="form-control">
							<option>Pria</option>
							<option>Wanita</option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Pendidikan Terakhir</label>
						<select class="form-control">
							<option>TK</option>
							<option>SD</option>
							<option>SMP</option>
							<option>SMA</option>
							<option>D1</option>
							<option>D2</option>
							<option>D3</option>
							<option>S1</option>
							<option>S2</option>
							<option>S3</option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Status:</label>
						<select class="form-control" id="sel1">
							<option>Aktif</option>
							<option>Suspend</option>
						</select>
					</div>
					<button class="btn btn-primary">
						<i class="icon ti-save"></i>
						<span>Simpan</span>
					</button>
					<a href="group.php" class="btn btn-danger">
						<i class="icon ti-back-left"></i>
						<span>Kembali</span>
					</a>
				</div>
			</form>
		</div>
	</div>
	<!--theme panel-->
</div>
<!--main content-->

<?php include('footer.php'); ?>