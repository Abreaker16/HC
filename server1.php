<?php
session_start();

$CName = "";
$CNumber = "";
$Email = "";
$Date = "";
$Caddress = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'hc');

if (isset($_POST['HC_booking'])) {
  $CName = mysqli_real_escape_string($db, $_POST['CName']);
  $CNumber = mysqli_real_escape_string($db, $_POST['CNumber']);
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
  $Date = mysqli_real_escape_string($db, $_POST['Date']);
  $Caddress = mysqli_real_escape_string($db, $_POST['Caddress']);

  if (empty($CName)) { array_push($errors, "Name is required"); }
  if (empty($CNumber)) { array_push($errors, "Number is required"); }
  if (empty($Email)) { array_push($errors, "Email is required"); }
  if (empty($Date)) { array_push($errors, "Date is required"); }
  if (empty($Caddress)) { array_push($errors, "Address is required"); }
  
  if (count($errors) == 0) {
  	$query = "INSERT INTO booking (CName, CNumber, Email, Date ,Caddress) 
  			  VALUES('$CName', '$CNumber', '$Email','$Date','$Caddress')";
  	mysqli_query($db, $query);
  	$_SESSION['CName'] = $CName;
  	$_SESSION['success'] = "Your Booking is Successful";
  	header('location: Thanks.php');
  }
}
?>