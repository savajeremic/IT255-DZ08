<?php
if(isset($_GET['log'])){
	session_start();
	session_destroy();
	session_commit();
	header('Location: login.php');
	exit(0);
}
session_start();
if(isset($_SESSION['username'])){
	header('Location: index.php');
	exit(0);
}
?>
<html>
	<head>
		<title>Login stranica: Sava Jeremic 2733</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<link rel = "stylesheet" type = "text/css" href = "css/styles.css">
		<script type="text/javascript" src="js/script.js"></script>
		
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-login">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-6">
									<a href="#" class="active" id="login-form-link">Login</a>
								</div>
								<div class="col-xs-6">
									<a href="#" id="register-form-link">Register</a>
								</div>
							</div>
							<hr>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<form action="login_check.php" method="POST" id="login-form" role="form" style="display: block;">
										<div class="form-group input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input type="text" name="username1" class="form-control" placeholder="Username">
										</div>			
																	
										<div class="form-group input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
											<input type="password" name="password1" class="form-control" placeholder="Password">
										</div>
																		
										<div class="form-group text-center">
											<input type="checkbox">
											<label for="remember"> Remember Me</label>
										</div>
																		
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" class="form-control btn btn-login" value="Log In">
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<div class="row">
												<div class="col-lg-12">
													<div class="text-center">
														<a href="#" class="forgot-password">Forgot Password?</a>
													</div>
												</div>
											</div>
										</div>
									</form>
									
									<form action="dodajNovogKorisnikaLogin.php" method="GET" id="register-form" role="form" style="display: none;">
										<div class="form-group">
											<input type="text" name="username" class="form-control" placeholder="Username">
										</div>
														
										<div class="form-group">
											<input type="password" name="password" class="form-control" placeholder="Password">
										</div>
														
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Email Address">
										</div>
														
										<div class="form-group">
											<input type="text" name="ime" class="form-control" placeholder="Ime">
										</div>
														
										<div class="form-group">
											<input type="text" name="prezime" class="form-control" placeholder="Prezime">
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" class="form-control btn btn-register" value="Register Now">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>	