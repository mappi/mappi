<?php include('header.php'); ?>

<!-- Page Header -->
<div class="page_header">
	<div>
		<i class="icon ti-pencil-alt page_header_icon"></i>
		<span class="main-text">Tambah Pertanyaan</span>
	</div>
</div>
<!-- /pageheader -->

<script type="text/javascript">
	$(document).ready(function() {
		$('#uploadDokumen').hide();
		$('#textboxShow').hide();
		$('#tipePertanyaan').change(function() {
			var pilih = $('#tipePertanyaan').val();
			//alert($('#tipePertanyaan').val());
			if (pilih == '1') {
				$('#textboxShow').show();
				$('#uploadDokumen').hide();
				//$('#multiInputOpsi').hide();
			} else if (pilih == '2' || pilih == '3' || pilih == '4') {
				$('#uploadDokumen').show();
				$('#textboxShow').hide();
			} else {
				$('#textboxShow').hide();
				$('#uploadDokumen').hide();
			}
		});

		$('#multiInput').change(function() {
			var opsi = $('#multiInput').val();
			//$('#multiInputOpsi').hide();
			if (opsi == '1') {
				$('#multiInputOpsi').show();
			}
			if (opsi == '2' || opsi == '') {
				$('#multiInputOpsi').hide();
			}
		});

		$("#btnAddRow").on("click", function() {
			var newRow = $("<tr>");
			var cols = "";

			cols += '<td><input type="text" class="form-control" placeholder="Opsi" name="namaFoto[]"></td>';
			cols += '<td>';
			cols += '<select class="form-control" id="tambahOpsi">';
			cols += '<option>Ya</option>';
			cols += '<option>Tidak</option>';
			cols += '</select>';
			cols += '</td>';
			cols += '<td>';
			cols += '<select class="form-control" id="tambahTextbox">';
			cols += '<option>Ya</option>';
			cols += '<option>Tidak</option>';
			cols += '</select>';
			cols +=	'</td>';
			cols +=	'<td>';
			cols +=	'<select class="form-control" id="koneksiLain">';
			cols +=	'<option>Pilih</option>';
			cols +=	'<option>Apakah sidang dilaksanakan sesuai dengan jadwal?</option>';
			cols +=	'<option>Apakah pengadilan sudah menyediakan ruang Posbakum</option>';
			cols +=	'<option>Apakah pengadilan sudah memiliki petugas meja pengaduan</option>';
			cols +=	'</select>';
			cols +=	'</td>';
			cols += '<td style="vertical-align:top;"><input type="button" class="btn btn-danger ibtnDel" value="X"></td>';
			newRow.append(cols);
			$("table.order-list").append(newRow);
		});

		$("table.order-list").on("click", ".ibtnDel", function(event) {
			$(this).closest("tr").remove();
			$("#btnAddRow").attr('disabled', false).prop('value', "Tambah Opsi");
		});

		$("#btnAddRowMulti").on("click", function() {
			var newRow = $("<tr>");
			var cols = "";

			cols += '<td><input type="text" class="form-control" placeholder="Opsi" name="namaFoto[]"></td>';
			cols += '<td style="vertical-align:top;"><input type="button" class="btn btn-danger ibtnDel" value="X"></td>';
			newRow.append(cols);
			$("table.order-list-multi").append(newRow);
		});

		$("table.order-list-multi").on("click", ".ibtnDel", function(event) {
			$(this).closest("tr").remove();
			$("#btnAddRowMulti").attr('disabled', false).prop('value', "Tambah Opsi");
		});

	});
</script>

<!--main content-->
<div class="main-content">
	<!--theme panel-->
	<div class="panel">
		<div class="panel-body">
			<!--form-heading-->
			<div class="form-heading">Tambah Pertanyaan</div>

			<div class="col-md-12">
				<div class="alert alert-danger">
					<ul>
						<li>Judul harus diisi</li>
						<li>Layanan harus dipilih</li>
						<li>Sub layanan harus dipilih</li>
						<li>Proyek harus dipilih</li>
						<li>Status harus dipilih</li>
					</ul>
				</div>
				<div class="alert alert-success">
					Pertanyaan berhasil diinput
				</div>
			</div>
			<!--form-heading-->
			<form class="form" method="post">
				<div class="col-md-12">
					<!--Default Form-->
					<div class="form-group">
						<label class="control-label">Judul:</label>
						<textarea class="form-control text-area"></textarea>
					</div>
					<div class="form-group">
						<label class="control-label">Layanan:</label>
						<select class="form-control">
							<option>Layanan Pengadilan</option>
							<option>Layanan Persidangan</option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Sub Layanan:</label>
						<select class="form-control">
							<option>Administrasi Pengadilan</option>
							<option>Bantuan Hukum</option>
							<option>Pengaduan</option>
							<option>Layanan Informasi</option>
							<option>Fasilitas Pengadilan</option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Proyek:</label>
						<select class="form-control">
							<option>Proyek A</option>
							<option>Proyek B</option>
							<option>Proyek C</option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Tipe Pertanyaan:</label>
						<select class="form-control" id="tipePertanyaan">
							<option value="">Pilih</option>
							<option value="1">Textbox</option>
							<option value="2">Dropdown</option>
							<option value="3">Radio</option>
							<option value="4">Checkbox</option>
							<option value="5">Textarea</option>
						</select>
					</div>
					<div id="textboxShow">
						<div class="form-group">
							<label class="control-label">Multi Input</label>
							<select class="form-control" id="multiInput">
								<option value="1">Ya</option>
								<option value="2">Tidak</option>
							</select>
						</div>
						<div class="form-group" id="multiInputOpsi">
							<table class="table order-list-multi" style="width:100%; margin-bottom:0;" id="tableUpload">
								<thead>
									<tr>
										<th>Label</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" class="form-control" placeholder="Opsi" name="namaFoto[]"></td>
									</tr>
								</tbody>
							</table>
							<table id="divAddRowMulti">
								<tr>
									<td colspan="2"><button type="button" class="btn btn-success" id="btnAddRowMulti">Tambah Opsi</button></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="form-group" id="uploadDokumen">
						<!--<label class="control-label"></label>-->
						<table class="table order-list" style="width:100%; margin-bottom:0;" id="tableUpload">
							<thead>
								<tr>
									<th>Opsi</th>
									<th>Upload Foto?</th>
									<th>Textbox?</th>
									<th>Koneksi Pertanyaan Lain</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="text" class="form-control" placeholder="Opsi" name="namaFoto[]"></td>
									<td>
										<select class="form-control" id="tambahOpsi">
											<option>Ya</option>
											<option>Tidak</option>
										</select>
									</td>
									<td>
										<select class="form-control" id="tambahTextbox">
											<option>Ya</option>
											<option>Tidak</option>
										</select>
									</td>
									<td>
										<select class="form-control" id="koneksiLain">
											<option>Pilih</option>
											<option>Apakah sidang dilaksanakan sesuai dengan jadwal?</option>
											<option>Apakah pengadilan sudah menyediakan ruang Posbakum</option>
											<option>Apakah pengadilan sudah memiliki petugas meja pengaduan</option>
										</select>
									</td>
								</tr>
							</tbody>
						</table>
						<table id="divAddRow">
							<tr>
								<td colspan="2"><button type="button" class="btn btn-success" id="btnAddRow">Tambah Opsi</button></td>
							</tr>
						</table>
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
					<a href="pertanyaan.php" class="btn btn-danger">
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