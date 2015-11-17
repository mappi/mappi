<?php include('header.php'); ?>

<!-- Page Header -->
<div class="page_header">
	<div>
		<i class="icon ti-pencil-alt page_header_icon"></i>
		<span class="main-text">Project</span>
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
					<a href="project-add.php" class="btn btn-primary pull-right" style="height:40px;"><i class="fa fa-plus-circle fa-lg"></i> Tambah Project</a>
				</div>				
			</h3>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<div id="example_wrapper" class="dataTables_wrapper" role="grid">
					<table class="table table-bordered table-hover table-striped" id="example" aria-describedby="example_info">
						<thead>
							<tr role="row">
								<th>Project</th>
								<th>Periode</th>
								<th>Status</th>
								<th>Create</th>
								<th>Update</th>
								<th></th>
							</tr>
						</thead>

						<tbody role="alert" aria-live="polite" aria-relevant="all">
							<tr>
								<td>Project A</td>
								<td>30 September 2015 - 30 April 2016</td>
								<td>Aktif</td>
								<td>Choky</td>
								<td>Ali</td>
								<td style="text-align:right; width:20%;">
									<a href="#" class="btn btn-primary btn-icon-primary" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="" data-original-title="Detail">
										<i class="icon ti-zoom-in"></i>
									</a>
									<a href="#" class="btn btn-green btn-icon-green" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="" data-original-title="Ubah">
										<i class="icon ti-pencil"></i>
									</a>
									<a href="#" class="btn btn-danger btn-icon-primary" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="" data-original-title="Hapus">
										<i class="icon ti-trash"></i>
									</a>
								</td>
							</tr>
							<tr>
								<td>Project B</td>
								<td>1 Januari 2016 - 30 April 2016</td>
								<td>Tidak Aktif</td>
								<td>Ali</td>
								<td>Choky</td>
								<td style="text-align:right;">
									<a href="#" class="btn btn-primary btn-icon-primary" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="" data-original-title="Detail">
										<i class="icon ti-zoom-in"></i>
									</a>
									<a href="#" class="btn btn-green btn-icon-green" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="" data-original-title="Ubah">
										<i class="icon ti-pencil"></i>
									</a>
									<a href="#" class="btn btn-danger btn-icon-primary" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="" data-original-title="Hapus">
										<i class="icon ti-trash"></i>
									</a>
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