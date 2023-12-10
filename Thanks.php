<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thanks for Registration</title>
	<link rel="stylesheet" type="text/css" href="css/styleee3.css">
    <link rel="stylesheet" type="text/css" href="css/styleee1.css">
    <link rel="stylesheet" type="text/css" href="css/styleee.css">
</head>
<body>

    <body>
	<div class="row">
			<div class="col">
			<br><br><br>
			<img src="image/home-img.svg" alt="">
			</div>
	<div class="col4">
	<header class="header">
	<a href="index.php" class="logo"> <i class="fas fa-heartbeat"></i> Hospital Care </a>
	<nav class="navbar">
		<a href="index.php">home</a>
		<a href="login1.php">logout</a>
	</nav>
	<div id="menu-btn" class="fas fa-bars"></div>
	</header>
    <div class="col3">
        <h1> Thank you For Registration <?php echo $_SESSION['username']; ?></h1>
        <h2> Please download your booking confirmation </h2><br>
        <button class="btn2">  <a href="your details.php">download pdf</a></button> 
</body>
</html>