<?php
$title = "Welcome to Met-Shop!";
include('header.php');
?>
<html lang="en">
	<head>
		<title>MET-SHOP</title>
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
								<div class="col-md-2 col-md-offset-5">
									<a href="#" class="active" id="register-form-link">Register</a>
								</div>
							</div>
							<hr>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<form action="dodajNovogKorisnika.php" method="GET" id="register-form" role="form" style="display: none;">
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
		
		<div class="container search">
			<div class="col-md-7 col-md-push-9">
				<form action="" class="search-form">
					<div class="form-group has-feedback">
						<label for="search" class="sr-only">Search</label>
						<input type="text" class="form-control" name="search" id="search" placeholder="search">
						<span class="glyphicon glyphicon-search form-control-feedback"></span>
					</div>
				</form>
			</div>
		</div>		
		
		<div id="myCaroussel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="active item">
					<img src="http://images.gibson.com/Files/20b17b4b-a49a-4567-bd13-f55bbbaf7850.jpg" alt="Guitar">
					<div class="carousel-caption">
						<h1><mark>Get the Original Gibson Les Paul For 2000$</mark></h1>
					</div>
				</div>

				<div class="item">
					<img src="http://cdn.moneycrashers.com/wp-content/uploads/2012/03/apple-imac-27.jpg" alt="Apple Mac">
					<div class="carousel-caption">
						<h1><mark>Get the Apple Mac just for 499.99$</mark></h1>
					</div>
				</div>

				<div class="item">
					<img src="http://pisces.bbystatic.com/image2/BestBuy_US/images/products/5560/5560500_sa.jpg" alt="Witcher 3">
					<div class="carousel-caption">
						<h1><mark>Get the Collectors Edition for a 50% discount!</mark></h1>
					</div>
				</div>

				<div class="item">
					<img src="http://images.menswearhouse.com/is/image/TMW/MW40_31EL_01_LAUREN_BY_RALPH_LAUREN_NAVY_SOLID_SET?01AD=3GbA5An3mRHzJMsl-MmL73zaIQqAwbXBLc93tUyNut25eBYFVfb-6_Q&01RI=ED57CDFBDED0DDE&01NA=&wid=1200&hei=627" alt="Suit">
					<div class="carousel-caption">
						<h1><mark>Check out some of our newest fashion suits!</mark></h1>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel"></a>
				<a class="right carousel-control" href="#myCarousel"></a>
			</div>		
		</div>
		
		<div class="container-fluid">
		<hr/>
			<div class="row">
				<div class="col-md-11 col-md-push-1">
					<div class="col-md-3">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#">About us</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#">Our Website Associate</a></li>
							<li><a href="#">Email</a></li>
						</ul>
				  </div>
					<div class="col-md-3">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Twitter</a></li>          
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#">Product Help</a></li>
							<li><a href="#">Developer API</a></li>
						</ul>
					</div>  
				</div>
			</div>
		<hr>
		<div class="row">
			<div class="col-md-4 col-md-push-4">
				<ul class="nav nav-pills nav-justified">
					<li><a href="/">© 2017 Sava & Co</a></li>
					<li><a href="#">Terms of Service</a></li>
					<li><a href="#">Privacy</a></li>
				</ul>
			</div>
		</div>
		</div>
	</body>
</html>