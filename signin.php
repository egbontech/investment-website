<?php
session_start();

include('includes/header.php');
include('includes/navbar.php');

if(isset($_SESSION['auth']))
{	  
header("Location: users/index");
exit(0);
}

?>

	<!-- Breadcrumb Area Start -->
	<section class="breadcrumb-area extra-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="title extra-padding"style="opacity:0">
					Log In
					</h4>
					<ul class="breadcrumb-list">
						<li>
							<a href="index">
								<i class="fas fa-home"></i>
								Home
							</a>
						</li>
						<li>
							<span><i class="fas fa-chevron-right"></i> </span>
						</li>
						<li>
							<a href="signin">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb Area End -->

	<!-- Signin Area Start -->
	<section class="auth">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-10">
					<div class="sign-form">
						<div class="heading">
						
							<h4 class="title">
									Hey,welcome back
							</h4>
						<style>
							::placeholder{
								color: #ccc !important
							}
							.error{
								text-align:center;
								padding:7px 0;
								margin-bottom:5px;
								background: linear-gradient(to bottom, #4A00E0, #8E2DE2);
							}
							.success{
								text-align:center;
								padding:7px 0;
								margin-bottom:5px;
								background: lightseagreen;
							}
							input[type=number]::-webkit-inner-spin-button,
							input[type=number]::-webkit-outer-spin-button {
							-webkit-appearance: none;
							margin: 0;
							}
						</style>
							<p class="subtitle">
									Sign in to continue
							</p>
						</div>
						<form class="form-group mb-0" action="codes/signin"method="POST">
						<?php  
							if(isset($_SESSION['success']))
							{ ?>
                              <div class="success"><?=  $_SESSION['success'] ?></div>
							<?php }	unset($_SESSION['success'])
							?>
						   <?php  
							if(isset($_SESSION['error']))
							{ ?>
                              <div class="error"><?=  $_SESSION['error'] ?></div>
							<?php }	unset($_SESSION['error'])
							?>
						  <input class="form-control " type="email" name="email" placeholder="Email"style="color:white">
						  <input class="form-control" type="password" name="password" placeholder="Password"style="color:white">
						  <div class="custom-control custom-checkbox  d-flex">						
							<span class="ml-auto"><a href="forgot-pass">Forgot Password ?</a></span>
						  </div>
						  <button class="base-btn1" type="submit"name="login">Log In</button>
						  <p class="reg-text text-center mb-0">Don't have an account? <a href="signup">Register Now</a></p>
						</form>
					  </div>
				</div>
			</div>
		</div>
	</section>
	<!-- Signin Area End -->

	<?php include('includes/footer.php') ?>	