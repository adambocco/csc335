<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bow Wow Signup</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- Google Font API library -->
	<link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">

<!--===============================================================================================-->
</head>
<body style="background-color: #ffffff;">

	<div class="limiter" style="background: #ffff;">

<div class="pos-f-t bg-primary">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="p-4 bg-primary">
      <h4 class="text-dark"></h4>
      <a class="text-light font-weight-bold " href="../socialMediaApp/Tempo/index.html" style="font-weight: 900;">Go Home</a><br><br>
			<a class="text-light font-weight-bold" href="../login2/login.php" style="font-weight: 900;">Login</a>
		</div>
  </div>
  <nav class="navbar navbar-dark bg-primary font-weight-bold">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
		<div class="container-login100" style="background: #ffffffff;">
			<div class="wrap-login100">
				<form class="login100-form validate-form" autocomplete="off" action='../socialMediaApp/backendLogic/validate_register.php' method="POST">
					<img src="https://i.pinimg.com/originals/07/de/bd/07debd3c60f7e252e42fa76f516624e5.png" style="border-radius: 50%; width: 200px; position: relative; left: 150px; margin-bottom: 20px; padding-bottom: 20px;">
					<span class="login100-form-title p-b-43" style="font-weight: 900; color: #5294ff; font-family: 'Akaya Kanadaka', cursive; font-size: 35px;">
						Signup now and meet new friends!
					</span>
					<?php
					$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					if(strpos($url, "error=emptyFields") == TRUE){
						echo '<p class="alert alert-danger">All fields required <i class="fa fa-exclamation-circle"></i></p>';
					}
					else if(strpos($url, "invalidEmail") == TRUE){
						echo '<p class="alert alert-danger">Email is not valid <i class="fa fa-exclamation-circle"></i></p>';
					}
					else if(strpos($url, "invalidPwd") == TRUE){
						echo '<p class="alert alert-danger">Password must meet the following constraints: <i class="fa fa-exclamation-circle"></i>
						<ul class="bg-dark">
						<li class="font-weight-bold text-light">Must be at least 8 characters long</li>
						<li class="font-weight-bold text-light">Must have at least one uppercase letter</li>
						<li class="font-weight-bold text-light">Must have at least one number</li>
						<li class="font-weight-bold text-light">Must have at least one symbol</li>
						</ul>
						</p>';
					}
					else if(strpos($url, "passwordsNotMatched") == TRUE){
						echo '<p class="alert alert-danger font-weight-bold">Both passwords must match <i class="fa fa-exclamation-circle"></i></p>';
					}
					else if(strpos($url, "sqlError") == TRUE){
						echo '<p class="alert alert-warning font-weight-bold">An unkown database error has occurred <i class="fa fa-exclamation-circle"></i></p>';
					}
					else if(strpos($url, "userExists") == TRUE){
						echo '<p class="alert alert-primary font-weight-bold">A user with the given info already exists <i class="fa fa-exclamation-circle"></i></p>';
					}
					else if(strpos($url, "sqlErrorTwo") == TRUE){
						echo '<p class="alert alert-primary font-weight-bold">An unkown database error has occurred <i class="fa fa-exclamation-circle"></i></p>';

					}
					else if(strpos($url, "signupFailed") == TRUE){
						echo '<p class="alert alert-danger font-weight-bold">An error occurred and we were unable to create your account. Please try again later  <i class="fa fa-exclamation-circle"></i></p>';
					}
					else if(strpos($url, "signupSuccessful") == TRUE){
						echo '<p class="alert alert-success font-weight-bold">We\'ve created your account! Go ahead login, and start making new friends! <i class="fa fa-check-circle"></i></p>';
					}
					?>
					<div class="wrap-input100 validate-input" data-validate = "Must enter first and last name">
						<input class="input100" type="text" name="first_name">
						<span class="focus-input100"></span>
						<span class="label-input100">First Name</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Must enter first and last name">
						<input class="input100" type="text" name="last_name">
						<span class="focus-input100"></span>
						<span class="label-input100">Last Name</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="confirm_password">
						<span class="focus-input100"></span>
						<span class="label-input100">Retype Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							<p class="text-dark font-weight-bold">Already have an account? <a class="text-primary font-weight-bold" href="../login2/login.php">Login here</a></p>
						</div>

						<div>
							<a href="forgot_pwd.html" class="txt1 font-weight-bold">
								Forgot Password?
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="signUp">
							Create my account!
						</button>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('https://d.newsweek.com/en/full/1438738/dog-beach.jpg?w=1600&h=1200&q=88&f=106c0742e7d607498f3e1a0fe521ef23');">
				</div>
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

</body>
</html>
