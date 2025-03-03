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
            <div class="col-md-6 text-center mb-5"></div>
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
                        <form id="loginForm" class="signin-form">
                            <div class="form-group mt-3">
                                <input type="text" id="username" class="form-control" required>
                                <label class="form-control-placeholder" for="username">Username</label>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" required>
                                <label class="form-control-placeholder" for="password">Password</label>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                                    Continue
                                </button>
                            </div>
                        </form>
                        <div class="form-group text-center">
                            <a href="captiveportal_guest.php" class="btn btn-primary rounded px-3">
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
<script>
    $(document).ready(function() {
        $('#loginForm').on('submit', function(e) {
            e.preventDefault();
            var username = $('#username').val().toLowerCase();
            var password = $('#password-field').val().toLowerCase();
            if (username === 'admin' && password === 'admin') {
                window.location.href = '../php_views/final_admin/adashboard.php';
            } else if (username === 'owner' && password === 'owner') {
                window.location.href = '../php_views/final_owner/odashboard.php';
            } else if (username === 'user' && password === 'user') {
                window.location.href = '../php_views/user/user_profile.php';
            } else {
                alert('Invalid credentials!');
            }
        });
    });
</script>
</body>
</html>
