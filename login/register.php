<?php
	session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/jpg" href="images/icons/icon.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.jpg" alt="IMG">
				</div>




				<form  class="login100-form validate-form" action="register_post.php" method="post">
					<span class="login100-form-title">
						Welcome to <br> Qaseedah Shareef
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter Your Name">
                        <input class="input100" type="text" name="name" placeholder="Your Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                            <i class="fa-solid fa-font"  aria-hidden="true"></i>
						</span>
					</div>


                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Confirm Password is required">
						<input class="input100" type="password" name="con_pass" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<?php if(isset($_SESSION['match_err'])){ ?>
						<span class=" text-danger wrap-input100 validate-input"><?=$_SESSION['match_err']?></span>
						<?php } unset($_SESSION['match_err'])?>
					

                    <div class="wrap-input100 validate-input ml-5">
                        <input class="form-check-input" type="radio" name="gender"
						value="Male">
                       
                            <span class="ml-1 ">Male</span>
							
						</div>
						<div class="wrap-input100 validate-input ml-5">
							<input class="form-check-input" type="radio" name="gender" value="Female">
							
							<span class="ml-1">Female</span>
						</div>
                   
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-40">
						<a class="txt2" href="index.php">
							Already Have an Account?
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>




			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>

<?php
	if(isset($_SESSION['registered'])){ ?>
	<script>
		Swal.fire({
  position: 'center',
  icon: 'success',
  title: '<?=$_SESSION['registered']?>',
  showConfirmButton: false,
  timer: 1500
})
	</script>
	<?php } unset($_SESSION['registered'])?>