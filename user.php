<?php include('header.php'); ?>

<!-- Page Header -->
<div class="page_header">
	<div>
		<i class="icon ti-bar-chart page_header_icon"></i>
		<span class="main-text">Laporan per User</span>
	</div>
</div>
<!-- /pageheader -->

<script type="text/javascript">
	$(function () {
		$('#container').highcharts({
			chart: { type: 'column' },
			title: { text: 'Project A' },
			subtitle: { },
			xAxis: {
				categories: [
					'Apakah pengadilan memiliki jadwal sidang?',
					'Apakah sidang dilaksanakan sesuai dengan jadwal?',
					'Apakah pengadilan memungut biaya pelayanan?',
					'Apakah pengadilan sudah menyediakan ruang Posbakum',
					'Apakah pengadilan sudah memiliki petugas meja pengaduan',
					'Apakah pengadilan sudah memiliki petugas meja informasi?',
					'Kondisi ruang sidang'
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
					var s = '<strong>'+ this.x +'</strong>';
					$.each(this.points, function(i, point) {
						if (point.y == '0') {
							hasil = 'Tidak Ada';
						} else {
							hasil = 'Ada';
						}
						s += '<br/><span style="color:'+ point.series.color +'">\u25CF</span>: ' + '<strong>' + point.series.name + '</strong>' + ': ' + hasil;
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
				name: 'PN Jakarta Selatan',
				data: [0, 1, 0, 1, 0, 1, 0]
			}, {
				name: 'PN Jakarta Utara',
				data: [1, 0, 1, 0, 1, 0, 1]
			}, {
				name: 'PN Jakarta Barat',
				data: [1, 1, 0, 1, 1, 0, 1]
			}, {
				name: 'PN Jakarta Timur',
				data: [0, 1, 1, 1, 0, 1, 1]
			}, {
				name: 'PN Jakarta Pusat',
				data: [1, 0, 0, 1, 1, 0, 1]
			}, {
				name: 'PN Cibinong',
				data: [1, 1, 1, 1, 1, 1, 1]
			}, {
				name: 'PN Depok',
				data: [0, 1, 1, 1, 0, 0, 0]
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
								<li>Nama user harus diisi</li>
								<li>Project harus dipilih</li>
							</ul>
						</div>
					</div>
					<!--form-heading-->
					<table class="table order-list" style="width:100%; margin-bottom:0;" id="tableUpload">
						<thead>
							<tr>
								<th>Username / Nama User</th>
								<th>Project</th>
								<th>Pertanyaan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<input type="text" class="form-control" value="choky">
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
									<select class="form-control">
										<option>Pilih</option>
										<option>Apakah sidang dilaksanakan sesuai dengan jadwal?</option>
										<option>Apakah pengadilan sudah menyediakan ruang Posbakum</option>
										<option>Apakah pengadilan sudah memiliki petugas meja pengaduan</option>
									</select>
								</td>
								<td><button type="button" class="btn btn-primary" style="height:40px;"><i class="fa fa-plus-circle fa-lg"></i> Lihat Laporan</button></td>
								<td><a href="" class="btn btn-success" style="height:40px;"><i class="fa fa-download fa-lg"></i> Download Excel</a></td>
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