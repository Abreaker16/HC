<?php include('server.php') ?>
<!DOCTYPE html>
	<html>
	<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css/styleee3.css">
	<link rel="stylesheet" href="css/styleee.css">
		<link rel="stylesheet" href="css/styleee1.css">
	</head>
	<body>
		<div class="row">
			<div class="col">
			<br><br><br>
			<img src="image/home-img.svg" alt="">
			</div>
			<div class="col1">
	<header class="header">
	<a href="index.php" class="logo"> <i class="fas fa-heartbeat"></i> Hospital Care </a>
	<nav class="navbar">
		<a href="login1.php">login</a>
	</nav>
	<div id="menu-btn" class="fas fa-bars"></div>
	</header>
	<div class="header1">
		<h2>Register Here</h2>
	</div>
		
	<form method="post" action="register.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
		<h3>Username*</h3>
		<input type="text" placeholder="User Name" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
		<h3>Email*</h3>
		<input type="email" placeholder="E-mail" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
		<h3>Password*</h3>
		<input type="password" placeholder="Password" name="password_1">
		</div>
		<div class="input-group">
		<h3>Re-type Password*</h3>
		<input type="password" placeholder="Re-type Password" name="password_2">
		</div>
		<div class="input-group">
		<button type="submit" class="btn1" name="reg_user">Register</button>
		</div>
		<p>
			If you are already register? <a href="login1.php">Sign in</a>
		</p>
	</form>
			</div>
	</div>
	</body>
</html>