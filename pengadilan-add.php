<?php include('header.php'); ?>

<!-- Page Header -->
<div class="page_header">
	<div>
		<i class="icon ti-stamp page_header_icon"></i>
		<span class="main-text">Pengadilan</span>
	</div>
</div>
<!-- /pageheader -->

<!--main content-->
<div class="main-content">
	<!--theme panel-->
	<div class="panel">
		<div class="panel-body">
			<!--form-heading-->
			<div class="form-heading">Tambah Pengadilan</div>

			<div class="col-md-12">
				<div class="alert alert-danger">
					<ul>
						<li>Nama pengadilan harus diisi</li>
						<li>Alamat harus diisi</li>
						<li>Provinsi harus dipilih</li>
						<li>Kabupaten/kota harus dipilih</li>
						<li>Latitude harus diisi</li>
						<li>Longitude harus diisi</li>
					</ul>
				</div>
				<div class="alert alert-success">
					Pengadilan berhasil diinput
				</div>
			</div>
			<!--form-heading-->
			<form class="form" method="post">
				<div class="col-md-12">
					<!--Default Form-->
					<div class="form-group">
						<label class="control-label">Nama Pengadilan:</label>
						<input type="text" class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label class="control-label">Alamat:</label>
						<input type="text" class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label class="control-label">Provinsi:</label>
						<select class="form-control">
							<option>Nanggroe Aceh Darussalam</option>
							<option>Sumatra Utara</option>
							<option>Sumatra Barat</option>
							<option>Riau</option>
							<option>Kepulauan Riau</option>
							<option>Jambi</option>
							<option>Sumatra Selatan</option>
							<option>Bengkulu</option>
							<option>Lampung</option>
							<option>Bangka Belitung</option>
							<option>DKI Jakarta</option>
							<option>Jawa Barat</option>
							<option>Banten</option>
							<option>Jawa Tengah</option>
							<option>Daerah Istimewa Yogyakarta</option>
							<option>Jawa Barat</option>
							<option>Bali</option>
							<option>Nusa Tenggara Barat</option>
							<option>Nusa Tenggara Timur</option>
							<option>Kalimantan Barat</option>
							<option>Kalimantan Tengah</option>
							<option>Kalimantan Selatan</option>
							<option>Kalimantan Timur</option>
							<option>Kalimantan Utara</option>
							<option>Sulawesi Utara</option>
							<option>Gorontalo</option>
							<option>Sulawesi Tengah</option>
							<option>Sulawesi Selatan</option>
							<option>Sulawesi Barat</option>
							<option>Sulawesi Tenggara</option>
							<option>Maluku</option>
							<option>Maluku Utara</option>
							<option>Papua</option>
							<option>Papua Barat</option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Kabupaten/Kota:</label>
						<select class="form-control" id="sel1">
							<option>Jakarta Utara</option>
							<option>Jakarta Selatan</option>
							<option>Jakarta Barat</option>
							<option>Jakarta Timur</option>
							<option>Jakarta Pusat</option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Latitude:</label>
						<input type="text" class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label class="control-label">Longitude:</label>
						<input type="text" class="form-control" placeholder="">
					</div>
					<button class="btn btn-primary">
						<i class="icon ti-save"></i>
						<span>Simpan</span>
					</button>
					<a href="pengadilan.php" class="btn btn-danger">
						<i class="icon ti-back-left"></i>
						<span>Kembali</span>
					</a>
				</div>
				<div class="col-md-12">
				</div>
			</form>
		</div>
	</div>
	<!--theme panel-->
</div>
<!--main content-->

<?php include('footer.php'); ?>