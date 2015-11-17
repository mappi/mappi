<?php include('header.php'); ?>

<!-- Page Header -->
<div class="page_header">
	<div>
		<i class="icon ti-pencil-alt page_header_icon"></i>
		<span class="main-text">Tambah Project</span>
	</div>
</div>
<!-- /pageheader -->

<!--main content-->
<div class="main-content">
	<!--theme panel-->
	<div class="panel">
		<div class="panel-body">
			<!--form-heading-->
			<div class="form-heading">Tambah Project</div>

			<div class="col-md-12">
				<div class="alert alert-danger">
					<ul>
						<li>Nama project harus diisi</li>
						<li>Periode harus diisi</li>
						<li>Layanan harus dipilih</li>
						<li>Pengadilan harus dipilih</li>
						<li>User harus dipilih</li>
						<li>Status harus dipilih</li>
					</ul>
				</div>
				<div class="alert alert-success">
					Project berhasil diinput
				</div>
			</div>
			<!--form-heading-->
			<form class="form" method="post">
				<div class="col-md-12">
					<!--Default Form-->
					<div class="form-group">
						<label class="control-label">Nama Project:</label>
						<input type="text" class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label class="control-label">Periode:</label>
						<div class="picker">
							<div>
								<div id="date-range">
									<div class="input-group input-daterange" id="datepicker">
										<input type="text" class="form-control" name="start">
										<span class="input-group-addon bg">
											to
										</span>
										<input type="text" class="form-control" name="end">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label">Layanan:</label>
						<select class="multi form-control" multiple>
							<option value="1" selected> Layanan Pengadilan </option>
							<option value="2"> Layanan Persidangan </option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Pengadilan:</label>
						<select class="multi form-control" multiple>
							<option selected> PN Jakarta Utara </option>
							<option> PN Jakarta Barat </option>
							<option selected>PN Jakarta Selatan</option>
							<option>PN Jakarta Timur</option>
							<option selected>PN Jakarta Pusat</option>
							<option>PN Depok</option>
							<option selected>PN Cibinong</option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">User:</label>
						<select class="multi form-control" multiple>
							<option selected> choky </option>
							<option> ali </option>
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
					<a href="project.php" class="btn btn-danger">
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