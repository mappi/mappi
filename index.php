<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<!--320-->
	<title>MaPPI FHUI</title>
    <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/material.css">

    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/material.css"> -->


    <!-- Compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/css/materialize.min.css"> -->

    <link rel="stylesheet" type="text/css" href="assets/css/signin.css">
    <!-- custom scrollbar stylesheet -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">



</head>

<body>

	<div class="signin_wrapper">
		<div class="row">
			<div class="right_block">
				<div class="row">
					<form class="col-md-12 col-sm-12 col-xs-12">

                        <!-- fixes autocomplete off -->
                        <input style="display:none">
                        <input type="password" style="display:none">
                        <!-- /fixes autocomplete off -->

						<h2 class="signup-heading">Signin</h2>
						<div class="row">
							<div class="input-field col-md-12 col-sm-12 col-xs-12">
								<i class="ion-coffee prefix"></i>
								<input id="icon_prefix-2" name="icon_prefix-2" type="text" class="validate">
								<label for="icon_prefix-2">Username</label>
							</div>
							<div class="input-field col-md-12 col-sm-12 col-xs-12">
								<i class="ion-key prefix"></i>
								<input id="icon_prefix-3" type="password" class="validate">
								<label for="icon_prefix-3">Password</label>
							</div>
							<div class="input-field col-md-12 col-sm-12 col-xs-12">
								<a href="dashboard.php" class="btn btn-primary btn-block">Sign in</a>
							</div>
						</div>
						<!--<div class="bottom_info">
							<a href="#" class="pull-right" data-toggle="modal" data-target="#forgot">forgot password?</a>
							<a href="#" class="pull-left">MaPPI FHUI</a>
						</div>-->
						<div class="clearfix"></div>
						<!--<a href="dashboard.php" class="btn btn-primary btn-block">Sign in</a>-->
					</form>
				</div>                
			</div>
			<!-- right_block -->
		</div>
		<!-- row -->


		<!-- Modal -->
		<div class="modal fade" id="forgot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel"><i class="ion-android-settings"></i> Reset password</h4>
					</div>
					<div class="modal-body">
						<div class="col-sm-12">
							<input type="text" class="form-control" placeholder="Enter Email here">
							<h6 class="note"><i class="ion-android-mail"></i> password will be sent to your email</h6>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-red" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Send</button>
					</div>
				</div>
			</div>
		</div>
		<!-- modal -->
	</div>
	<!-- wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- custom scrollbar plugin -->
	<!-- Compiled and minified JavaScript -->
	<script src="assets/js/materialize.js"></script>

</body>
</html>