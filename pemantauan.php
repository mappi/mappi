<?php include('header.php'); ?>

<!-- Page Header -->
<div class="page_header">
	<div>
		<i class="icon ti-bar-chart page_header_icon"></i>
		<span class="main-text">Laporan Pemantauan</span>
	</div>
</div>
<!-- /pageheader -->

<script type="text/javascript">
	$(function () {
		$('#container').highcharts({
			chart: { type: 'column' },
			title: { text: 'Apakah pengadilan menyediakan fasilitas disabilitas? (contoh: Ramp, Toilet Khusus, Ruang Khusus, Parkir Khusus, dsb)' },
			subtitle: {  },
			xAxis: {
				categories: [
					'PN Jakarta Barat',
					'PN Jakarta Selatan',
					'PN Jakarta Utara',
					'PN Jakarta Timur',
					'PN Jakarta Pusat',
					'PN Cibinong',
					'PN Depok'
				],
				crosshair: true
			},
			yAxis: {
				min: 0,
				title: {
					text: ''
				}
			},
			tooltip: {
				formatter: function() {
					//var s = '<strong>'+ this.x +'</strong>';
					var s = '';
					$.each(this.points, function(i, point) {
						s += '<br /><span style="color:'+ point.series.color +'">\u25CF</span>: ' + '<strong>' + point.series.name + '</strong>' + ': ' + point.y;
					});
					return s;
				},
				shared: true,
				useHTML: true
			},
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0
				}
			},
			series: [{
				name: 'Ya',
				data: [13, 12, 15, 11, 16, 18, 12]
			}, {
				name: 'Tidak',
				data: [7, 8, 5, 9, 4, 2, 8]
			}],
			credits: {
				enabled: false
			}
		});
	});
</script>

<!--main content-->
<div class="main-content">
	<!--theme panel-->
	<div class="panel panel-piluku">
		<div class="panel-body">
			<div class="panel">
				<div class="panel-body">
					<!--form-heading-->
					<div class="col-md-12">
						<div class="alert alert-danger">
							<ul>
								<li>Pengadilan harus dipilih</li>
								<li>Layanan harus dipilih</li>
								<li>Sub layanan harus dipilih</li>
								<li>Project harus dipilih</li>
								<li>Pertanyaan harus dipilih</li>
							</ul>
						</div>
					</div>
					<!--form-heading-->
					<table class="table order-list" style="width:100%; margin-bottom:0;" id="tableUpload">
						<thead>
							<tr>
								<th>Pengadilan</th>
								<th>Layanan</th>
								<th>Sub Layanan</th>
								<th>Project</th>
								<th>Pertanyaan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<select class="form-control">
										<option>Pilih</option>
										<option>PN Jakarta Utara</option>
										<option>PN Jakarta Barat</option>
										<option>PN Jakarta Selatan</option>
										<option>PN Jakarta Timur</option>
										<option>PN Jakarta Pusat</option>
										<option>PN Depok</option>
										<option>PN Cibinong</option>
									</select>
								</td>
								<td>
									<select class="form-control">
										<option>Pilih</option>
										<option>Layanan Pengadilan</option>
										<option>Layanan Persidangan</option>
									</select>
								</td>
								<td>
									<select class="form-control">
										<option>Pilih</option>
										<option>Administrasi Pengadilan</option>
										<option>Bantuan Hukum</option>
										<option>Pengaduan</option>
										<option>Layanan Informasi</option>
										<option>Fasilitas Pengadilan</option>
									</select>
								</td>
								<td>
									<select class="form-control">
										<option>Pilih</option>
										<option>Project A</option>
										<option>Project B</option>
										<option>Project C</option>
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
								<td><button type="button" class="btn btn-primary" style="height:40px;"><i class="fa fa-plus-circle fa-lg"></i> Lihat Laporan</button></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-piluku">
		<div class="panel-body">
			<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
		</div>
	</div>	<!--theme panel-->
</div>
<!--main content-->

<?php include('footer.php'); ?>