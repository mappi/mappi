<?php include('header.php'); ?>

<!-- Page Header -->
<div class="page_header">
	<div>
		<i class="icon ti-headphone-alt page_header_icon"></i>
		<span class="main-text">Tambah Sub Layanan</span>
	</div>
</div>
<!-- /pageheader -->

<!--main content-->
<div class="main-content">
	<!--theme panel-->
	<div class="panel">
		<div class="panel-body">
			<!--form-heading-->
			<div class="form-heading">Tambah Sub Layanan</div>

			<div class="col-md-12">
				<div class="alert alert-danger">
					<ul>
						<li>Nama sub layanan harus diisi</li>
						<li>Layanan harus dipilih</li>
						<li>Status layanan harus dipilih</li>
					</ul>
				</div>
				<div class="alert alert-success">
					Sub layanan berhasil diinput
				</div>
			</div>
			<!--form-heading-->
			<form class="form" method="post">
				<div class="col-md-12">
					<!--Default Form-->
					<div class="form-group">
						<label class="control-label">Nama Sub Layanan:</label>
						<input type="text" class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label class="control-label">Layanan</label>
						<select class="form-control">
							<option>Layanan Pengadilan</option>
							<option>Layanan Persidangan</option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Upload Icon:</label>
						<input type="file" class="filestyle" data-icon="false">
					</div>
					<div class="form-group">
						<label class="control-label">Status:</label>
						<select class="form-control" id="sel1">
							<option>Aktif</option>
							<option>Tidak Aktif</option>
						</select>
					</div>
					<button class="btn btn-primary">
						<i class="icon ti-save"></i>
						<span>Simpan</span>
					</button>
					<a href="sublayanan.php" class="btn btn-danger">
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