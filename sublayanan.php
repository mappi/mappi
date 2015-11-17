<?php include('header.php'); ?>

<!-- Page Header -->
<div class="page_header">
	<div>
		<i class="icon ti-headphone-alt page_header_icon"></i>
		<span class="main-text">Sub Layanan</span>
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
					<a href="sublayanan-add.php" class="btn btn-primary pull-right" style="height:40px;"><i class="fa fa-plus-circle fa-lg"></i> Tambah Sub Layanan</a>
				</div>				
			</h3>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<div id="example_wrapper" class="dataTables_wrapper" role="grid">
					<table class="table table-bordered table-hover table-striped" id="example" aria-describedby="example_info">
						<thead>
							<tr role="row">
								<th>Sub Layanan</th>
								<th>Layanan</th>
								<th>Create</th>
								<th>Update</th>
								<th></th>
							</tr>
						</thead>

						<tbody role="alert" aria-live="polite" aria-relevant="all">
							<tr>
								<td>Administrasi Pengadilan</td>
								<td>Layanan Pengadilan</td>
								<td>Choky</td>
								<td>Ali</td>
								<td style="text-align:right; width:20%;">
									<button class="btn btn-primary btn-icon-primary"><i class="icon ti-zoom-in"></i></button>
									<button class="btn btn-green btn-icon-primary"><i class="icon ti-pencil"></i></button>
									<button class="btn btn-danger btn-icon-primary"><i class="icon ti-trash"></i></button>
								</td>
							</tr>
							<tr>
								<td>Bantuan Hukum</td>
								<td>Layanan Pengadilan</td>
								<td>Ali</td>
								<td>Choky</td>
								<td style="text-align:right;">
									<button class="btn btn-primary btn-icon-primary"><i class="icon ti-zoom-in"></i></button>
									<button class="btn btn-green btn-icon-primary"><i class="icon ti-pencil"></i></button>
									<button class="btn btn-danger btn-icon-primary"><i class="icon ti-trash"></i></button>
								</td>
							</tr>
							<tr>
								<td>Pengaduan</td>
								<td>Layanan Pengadilan</td>
								<td>Choky</td>
								<td>Ali</td>
								<td style="text-align:right;">
									<button class="btn btn-primary btn-icon-primary"><i class="icon ti-zoom-in"></i></button>
									<button class="btn btn-green btn-icon-primary"><i class="icon ti-pencil"></i></button>
									<button class="btn btn-danger btn-icon-primary"><i class="icon ti-trash"></i></button>
								</td>
							</tr>
							<tr>
								<td>Layanan Informasi</td>
								<td>Layanan Pengadilan</td>
								<td>Ali</td>
								<td>Choky</td>
								<td style="text-align:right;">
									<button class="btn btn-primary btn-icon-primary"><i class="icon ti-zoom-in"></i></button>
									<button class="btn btn-green btn-icon-primary"><i class="icon ti-pencil"></i></button>
									<button class="btn btn-danger btn-icon-primary"><i class="icon ti-trash"></i></button>
								</td>
							</tr>
							<tr>
								<td>Fasilitas Pengadilan</td>
								<td>Layanan Pengadilan</td>
								<td>Choky</td>
								<td>Ali</td>
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