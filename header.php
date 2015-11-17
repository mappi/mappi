<!DOCTYPE html>
<html lang="en">
	<head>
  		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->

  		<title>MaPPI FHUI</title>

  		<!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  		<link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->

  		<!-- Bootstrap CSS -->
		<link rel='stylesheet' href='assets/css/bootstrap.css'>
		<link rel='stylesheet' href='assets/css/material.css'>
		<link rel='stylesheet' href='assets/css/style.css'>

  		<script src='assets/js/jquery.js'></script>
		<script src='assets/js/app.js'></script>
	</head>

	<body class="" >
		<div class="wrapper ">
			<div class="left-bar ">
				<div class="admin-logo">
					<div class="logo-holder pull-left">
						<img class="logo" src="assets/images/example.png" alt="logo" style="width:155px; height:39px;">	
					</div>
					<!-- logo-holder -->
					<a href="#" class="menu-bar  pull-right"><i class="ti-menu"></i></a>
				</div>
				<!-- admin-logo -->

				<ul class="list-unstyled menu-parent" id="mainMenu">
					<li class="current">
						<a href="dashboard.php" class="waves-effect waves-light">
							<i class="icon ti-home"></i>
							<span class="text ">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="pengadilan.php" class="current waves-effect waves-light">
							<i class="icon ti-stamp"></i>
							<span class="text">Pengadilan</span>
						</a>
					</li>
					<li class="submenu">
						<a href="#layanan" class="waves-effect waves-light">
							<i class="icon ti-headphone-alt"></i>
							<span class="text">Layanan</span>
							<i class="chevron ti-angle-right"></i>
						</a>
						<ul class="list-unstyled" id="layanan">
							<li><a href="layanan.php">Layanan</a></li>
							<li><a href="sublayanan.php">Sub Layanan</a></li>
						</ul>
					</li>
					<li>
						<a href="#project" class="waves-effect waves-light">
							<i class="icon ti-pencil-alt"></i>
							<span class="text">Project</span>
							<i class="chevron ti-angle-right"></i>
						</a>
						<ul class="list-unstyled" id="project">
							<li><a href="project.php">Project</a></li>
							<li><a href="pertanyaan.php">Pertanyaan</a></li>
						</ul>
					</li>
					<li>
						<a href="group.php" class="waves-effect waves-light">
							<i class="icon ti-user"></i>
							<span class="text">User Management</span>
						</a>
					</li>
					<li>
						<a href="#laporan" class="waves-effect waves-light">
							<i class="icon ti-bar-chart"></i>
							<span class="text">Laporan</span>
							<i class="chevron ti-angle-right"></i>
						</a>
						<ul class="list-unstyled" id="laporan">
							<li><a href="user.php">Per User</a></li>
							<li><a href="pemantauan.php">Pemantauan</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- left-bar -->

			<div class="content" id="content">
				<div class="overlay"></div>			
	
				<div class="top-bar">
					<nav class="navbar navbar-default top-bar">
						<div class="menu-bar-mobile" id="open-left"><i class="ti-menu"></i></div>
						<ul class="nav navbar-nav navbar-right pull-right top-elements">
							<li class="piluku-dropdown dropdown">
								<a href="#" class="dropdown-toggle avatar_width" data-toggle="dropdown" role="button" aria-expanded="false">
									<span class="avatar-holder"><img src="assets/images/avatar.jpeg" alt=""></span>
									<span class="avatar_info">Administrator</span>
									<span class="drop-icon"><!-- <i class="ion ion-chevron-down"></i> --></span>
								</a>
								<ul class="dropdown-menu dropdown-piluku-menu  animated fadeInUp wow avatar_drop neat_drop dropdown-right" data-wow-duration="1500ms" role="menu">
									<li><a href="#"> <i class="ion-android-settings"></i>Settings</a></li>
									<li><a href="#"> <i class="ion-lock-combination"></i>Ubah Password</a></li>
									<li><a href="#"> <i class="ion-android-contact"></i>Ubah profile</a></li>
									<li><a href="index.php" class="logout_button"><i class="ion-power"></i>Logout</a></li>   
								</ul>
							</li>
						</ul>
					</nav>
				</div>
				<!-- /top-bar -->