<?php
session_start();
if(!isset($_SESSION['username'])){
	header('Location: login.php');
	exit(0);
}
require_once('connect.php');
$stmt = $conn->prepare('SELECT * FROM korisnici WHERE username=:username');
$stmt->bindParam(":username", $_SESSION['username']);
$stmt->execute();
$USER = $stmt->fetch();
?>

<html>
	<head>
		<title><?php echo "Sava Jeremic 2733";?></title>
		<link rel = "stylesheet" type = "text/css" href = "css/styles.css">
	</head>
	<body>
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">MET-SHOP</a>
				</div>
				
				<div class="containter-fluid">
					<ul class="nav navbar-nav">
						<li><a href="#">Clothing</a></li>
						<li><a href="#">Electronics</a></li>
						<li><a href="#">Entertainment</a></li>
						<li><a href="#">Computer Components</a></li>
						<li><a href="#">Games</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More Info<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Site1</a></li>
								<li><a href="#">Site2</a></li>
								<li><a href="#">Site3</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Our Department</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Join Us</a></li>
							</ul>	
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="glyphicon glyphicon-user"></span>
								<strong><?php echo $USER['username'];?></strong>
								<span class="glyphicon glyphicon-chevron-down"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a class="navbar-logout" href="login.php?log=true">Log Out<span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	</body>
</html>	