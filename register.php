
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
	<script src="js/main.js"></script>

<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	  <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
	  <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
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

   <style>

    </style>
</head>
<body>
<?php
// require 'Connexion.php';
require 'userFunctions.php';




?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
				<?php if (isset($_SESSION['error'])) : ?>
                    <div class="p-2 alert alert-danger" role="alert"><?= $_SESSION['error'] ?></div>

                    <?php
                        unset($_SESSION['error']); ?>
                <?php elseif (isset($_SESSION['username'])) : ?>
                    <div class="p-2 alert alert-primary" role="alert"><?= $_SESSION['username'] ?></div>

                <?php endif; ?>
					<span class="login100-form-title-1">
						Register
					</span>
				</div>

				<form method="POST" action="register.php" enctype="multipart/form-data" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Saisir le nom ">
						<span class="label-input100">Nom</span>
						<!-- <input type="text" id="name" required name="name" placeholder="Name" value="<?= (isset($_POST['name'])) ? $_POST['name'] : '' ?>"> -->
						
						<input class="input100" type="text" id="name" required name="name" placeholder="Name" value="<?= (isset($_POST['name'])) ? $_POST['name'] : '' ?>">
						<span class="focus-input100"></span>
					</div>

					
					<!-- <input type="text" id="email" class="form-control" required name="email" placeholder="Email" value="<?= (isset($_POST['email'])) ? $_POST['email'] : '' ?>"> -->
					
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Saisir email" >
						<span class="label-input100">Email</span>
						<input type="test" id="email" class="input100" required name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-18" data-validate = "Saisir le mot de passe" >
						<span class="label-input100">Mot de passe</span>
						<input type="password" id="password" class="input100" required name="password" placeholder="password">
						<span class="focus-input100"></span>
					</div>
					<!-- <input type="password" id="c_password"  name="c_password"  class="form-control" placeholder="confirm password"> -->
				
				
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Confirmaer le mot de passe" >
						<span class="label-input100">Mot de passe</span>
						<input type="password" id="c_password"  class="input100" required name="c_password" placeholder="confirm password">
						<span class="focus-input100"></span>
					</div>



					<div class="flex-sb-m w-full p-b-30">
						<!-- <div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember mesign in
							</label>
						</div> -->

						<div>
						
							<a href="login.php" class="txt1">
								Login?
							</a>
						</div>
					</div>
					<!-- <input type="submit" name="submit-register" value="Sign in" class="btn float-right login_btn"> -->
					<!-- <input type="submit" name="submit-register" value="Sign in" class="btn float-right login_btn"> -->
					<!-- <input type="submit" name="submit-login" value="Login" class="btn float-right login_btn"> -->
					<div class="container-login100-form-btn">
					<input type="submit" name="submit-register" value="Register" class="login100-form-btn">
						<!-- <button class="login100-form-btn">
							Login
						</button> -->
					</div>
				</form>
			</div>
		</div>
	</div>
	


<!-- 
<div class="container">

	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
                <h3>Register</h3>
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="p-2 alert alert-danger" role="alert"><?= $_SESSION['error'] ?></div>

                    <?php
                        unset($_SESSION['error']); ?>
                <?php elseif (isset($_SESSION['username'])) : ?>
                    <div class="p-2 alert alert-primary" role="alert"><?= $_SESSION['username'] ?></div>

                <?php endif; ?>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method="POST" action="register.php" enctype="multipart/form-data">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-at"></i></span>
							
						</div>
						<input type="text" id="name" required name="name" placeholder="Name" value="<?= (isset($_POST['name'])) ? $_POST['name'] : '' ?>">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <input type="text" id="email" class="form-control" required name="email" placeholder="Email" value="<?= (isset($_POST['email'])) ? $_POST['email'] : '' ?>">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" id="password"  name="password"  class="form-control" placeholder="password">
                    </div>
                    
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" id="c_password"  name="c_password"  class="form-control" placeholder="confirm password">
                    </div>
                    
					
					<div class="form-group">
						<input type="submit" name="submit-register" value="Sign in" class="btn float-right login_btn">
					</div>
				</form>
          
            </div>
            <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="login.php">Sign Up</a>
				</div>
				
			</div>
		</div>
	</div>
</div> -->
</body>
</html>