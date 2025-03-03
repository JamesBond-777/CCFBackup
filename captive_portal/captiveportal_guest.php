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

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
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
							<form class="signin-form">
								<div class="form-group mt-3">
									<h4><strong>Terms and Conditions</strong></h4>
									<div id="terms-box" class="terms-box" style="border: 1px solid #ccc; padding: 10px; height: 150px; overflow-y: scroll; background: #f8f9fa; font-size: 14px;">
										<p>
											1. You agree to use this service responsibly and abide by all applicable laws.<br>
											2. The guest access is provided as-is with no guarantees of uptime or speed.<br>
											3. Any misuse, including illegal activities, will result in immediate termination of access.<br>
											4. We are not responsible for any data loss or security issues while using this network.<br>
											5. By proceeding, you acknowledge and accept these terms.
										</p>
									</div>
									<div class="form-group mt-2">
										<input type="checkbox" id="agree-checkbox">
										<label for="agree-checkbox"> Agree to Terms and Conditions</label>
									</div>
								</div>

								<!-- Guest Login Button -->
								<div class="form-group">
									<button type="button" id="guest-login-btn" class="form-control btn btn-primary rounded submit px-3" disabled onclick="navigateToGuestPage()">
										Login as Guest
									</button>
								</div>
							</form>
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
  <script>
    document.getElementById('agree-checkbox').addEventListener('change', function() {
        document.getElementById('guest-login-btn').disabled = !this.checked;
    });

    function navigateToGuestPage() {
        window.location.href = 'http://localhost/CCFBackup/php_views/guest_user/guest_homepage.php';
    }
  </script>

	</body>
</html>
