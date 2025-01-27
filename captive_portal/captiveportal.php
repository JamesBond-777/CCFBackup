<?php

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Captive Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	<style>
		.btn-secondary {
			opacity: 1 !important;
		}
	</style>
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<!-- <h2 class="heading-section"></h2> -->
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-4">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">
		      		<div class="w-100">
		      			<h3 class="mb-4">Sign In</h3>
		      		</div>
		      	</div>
							<form action="http://localhost/CCFBackup/php_views/user/user_profile.php" method="GET" class="signin-form">
		      		<div class="form-group mt-3">
		      			<input type="text" name="username" class="form-control" required>
		      			<label class="form-control-placeholder" for="username">Username</label>
		      		</div>
		            <div class="form-group">
		              <input id="password-field" name="access_code" type="password" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Access Code</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>

		            <div class="form-group">
							<button type="submit" class="form-control btn btn-primary rounded submit px-3">
								Continue
							</button>
		            </div>
			          </form>

		            <div class="form-group text-center">
							<a href="http://localhost/CCFBackup/captive_portal/captiveportal_guest.php" class="btn btn-primary rounded px-3">
								Login as Guest
							</a>
		            </div>
			        </div>
			      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/login.js"></script>

	</body>
</html>
