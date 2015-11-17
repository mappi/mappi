<?php include('header.php'); ?>

<!-- Page Header -->
<div class="page_header">
	<div>
		<i class="icon ti-pencil-alt page_header_icon"></i>
		<span class="main-text">Pertanyaan</span>
	</div>
</div>
<!-- /pageheader -->

<!--main content-->
<div class="main-content">
	<!--theme panel-->
	<div class="panel panel-piluku">
		<div class="panel-heading">
			<h3 class="panel-title">
				<div class="filter-block pull-right">

					<div class="form-group pull-left">
						<div class="input-group demo-group">
							<form class="input-group" method="post" action="">
								<input type="text" class="form-control" placeholder="Cari...">
								<span class="input-group-btn">
									<button class="btn btn-success btn-lg" type="button"> <i class="fa fa-search fa-lg"></i> </button>
								</span>
							</form>
						</div>
					</div>
					&nbsp;
					<a href="pertanyaan-add.php" class="btn btn-primary pull-right" style="height:40px;"><i class="fa fa-plus-circle fa-lg"></i> Tambah Pertanyaan</a>
				</div>				
			</h3>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<div id="example_wrapper" class="dataTables_wrapper" role="grid">
					<table class="table table-bordered table-hover table-striped" id="example" aria-describedby="example_info">
						<thead>
							<tr role="row">
								<th>Pertanyaan</th>
								<th>Layanan</th>
								<th>Sub Layanan</th>
								<th>Create</th>
								<th>Update</th>
								<th></th>
							</tr>
						</thead>

						<tbody role="alert" aria-live="polite" aria-relevant="all">
							<tr>
								<td>Apakah pengadilan memiliki jadwal sidang?</td>
								<td>Layanan Pengadilan</td>
								<td>Administrasi Pengadilan</td>
								<td>Choky</td>
								<td>Ali</td>
								<td style="text-align:right; width:20%;">
									<button class="btn btn-primary btn-icon-primary"><i class="icon ti-zoom-in"></i></button>
									<button class="btn btn-green btn-icon-primary"><i class="icon ti-pencil"></i></button>
									<button class="btn btn-danger btn-icon-primary"><i class="icon ti-trash"></i></button>
								</td>
							</tr>
							<tr>
								<td>Apakah sidang dilaksanakan sesuai dengan jadwal?</td>
								<td>Layanan Pengadilan</td>
								<td>Administrasi Pengadilan</td>
								<td>Ali</td>
								<td>Choky</td>
								<td style="text-align:right;">
									<button class="btn btn-primary btn-icon-primary"><i class="icon ti-zoom-in"></i></button>
									<button class="btn btn-green btn-icon-primary"><i class="icon ti-pencil"></i></button>
									<button class="btn btn-danger btn-icon-primary"><i class="icon ti-trash"></i></button>
								</td>
							</tr>
							<tr>
								<td>Apakah pengadilan memungut biaya pelayanan?</td>
								<td>Layanan Pengadilan</td>
								<td>Administrasi Pengadilan</td>
								<td>Ali</td>
								<td>Choky</td>
								<td style="text-align:right;">
									<button class="btn btn-primary btn-icon-primary"><i class="icon ti-zoom-in"></i></button>
									<button class="btn btn-green btn-icon-primary"><i class="icon ti-pencil"></i></button>
									<button class="btn btn-danger btn-icon-primary"><i class="icon ti-trash"></i></button>
								</td>
							</tr>
							<tr>
								<td>Apakah pengadilan sudah menyediakan ruang Posbakum</td>
								<td>Layanan Pengadilan</td>
								<td>Bantuan Hukum</td>
								<td>Ali</td>
								<td>Choky</td>
								<td style="text-align:right;">
									<button class="btn btn-primary btn-icon-primary"><i class="icon ti-zoom-in"></i></button>
									<button class="btn btn-green btn-icon-primary"><i class="icon ti-pencil"></i></button>
									<button class="btn btn-danger btn-icon-primary"><i class="icon ti-trash"></i></button>
								</td>
							</tr>
							<tr>
								<td>Apakah pengadilan sudah memiliki petugas meja pengaduan</td>
								<td>Layanan Pengadilan</td>
								<td>Pengaduan</td>
								<td>Ali</td>
								<td>Choky</td>
								<td style="text-align:right;">
									<button class="btn btn-primary btn-icon-primary"><i class="icon ti-zoom-in"></i></button>
									<button class="btn btn-green btn-icon-primary"><i class="icon ti-pencil"></i></button>
									<button class="btn btn-danger btn-icon-primary"><i class="icon ti-trash"></i></button>
								</td>
							</tr>
							<tr>
								<td>Apakah pengadilan sudah memiliki petugas meja informasi?</td>
								<td>Layanan Pengadilan</td>
								<td>Layanan Informasi</td>
								<td>Ali</td>
								<td>Choky</td>
								<td style="text-align:right;">
									<button class="btn btn-primary btn-icon-primary"><i class="icon ti-zoom-in"></i></button>
									<button class="btn btn-green btn-icon-primary"><i class="icon ti-pencil"></i></button>
									<button class="btn btn-danger btn-icon-primary"><i class="icon ti-trash"></i></button>
								</td>
							</tr>
							<tr>
								<td>Kondisi ruang sidang</td>
								<td>Layanan Pengadilan</td>
								<td>Fasilitas Pengadilan</td>
								<td>Ali</td>
								<td>Choky</td>
								<td style="text-align:right;">
									<button class="btn btn-primary btn-icon-primary"><i class="icon ti-zoom-in"></i></button>
									<button class="btn btn-green btn-icon-primary"><i class="icon ti-pencil"></i></button>
									<button class="btn btn-danger btn-icon-primary"><i class="icon ti-trash"></i></button>
								</td>
							</tr>
						</tbody>
					</table>
					<ul class="pagination pagination-inverse pull-right">
						<li class="prev disabled"><a href="#">← Previous</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li class="next"><a href="#">Next → </a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>	<!--theme panel-->
</div>
<!--main content-->

<?php include('footer.php'); ?>