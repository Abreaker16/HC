<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
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
	<a href="index.php">Home</a>
</nav>
<div id="menu-btn" class="fas fa-bars"></div>
</header>
  <div class="header1">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login1.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<h3>Username</h3>
  		<input type="text" placeholder="User Name" name="username" >
  	</div>
  	<div class="input-group">
	     <h3>Password</h3>
  		<input type="password" placeholder="Password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn1" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>
</body>
</html>