<?php include('server1.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page </title>
    <link rel="stylesheet" href="css/styleee.css">
    <link rel="stylesheet" href="css/styleee1.css">
</head>
<body>
<header class="header">
<p class="logo"> <i class="fas fa-heartbeat"></i> Hospital Care </p>
<nav class="navbar">
    <a href="index.php">Home</a>
    <a href="login1.php">Logout</a>
    <a> Welcome <?php echo $_SESSION['username']; ?>
 </a>
    
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</header>
<br><br><br><br><br><br>
<section class="book" id="book">

    <h1 class="heading"> <span>book</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/book-img.svg" alt="">
        </div>

        <form method="post" action="booking.php">
        <?php include('errors.php'); ?>
            <h3>Book Appointment</h3>
            <input type="text" placeholder="your name" name="CName" class="box" value="<?php echo $CName; ?>">
            <input type="number" placeholder="your number" name="CNumber" class="box" value="<?php echo $CNumber; ?>">
            <input type="email" placeholder="your email" name="Email" class="box" value="<?php echo $Email; ?>">
            <input type="date" class="box" name="Date" value="<?php echo $Date; ?>">
            <input type="text" placeholder="Enter Address" name="Caddress" class="box" value="<?php echo $Caddress; ?>">
            <button type="submit" class="btn" name="HC_booking">Book Now</Button>
        </form>

    </div>

</section>
</body>