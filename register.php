<?php
include 'functions.php';

if (isset($_POST['register'])) {
    
    if (registrasi($_POST) > 0 ) {
        echo "<script>
				alert('Anda berhasil registrasi, silahkan login');
				location='login.php';
                </script>";
    }else {
        echo "<script>
		alert('Anda Gagal Registrasi');
		</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" action="" method="post">
					<span class="login100-form-title p-b-32">
						Register Admin
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-30" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Masukkan Username Anda" required autocomplete="off" autofocus >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-30" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" required placeholder="Masukkan Password" >
						<span class="focus-input100"></span>
                    </div>
                    
                    <span class="txt1 p-b-11">
						Confirm Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required" required>
						<input class="input100" type="password" name="password2" required placeholder="Ketik Ulang Password" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-35">
                        <div>
                            <p>
                                Sudah Punya Akun ?
                                <a href="login.php" class="txt3">Login</a>
                            </p>
                        </div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="register" class="login100-form-btn">
							Submit
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
</html>