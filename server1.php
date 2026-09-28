<?php
session_start();

// Initialize variables
$CName = "";
$CNumber = "";
$Email = "";
$Date = "";
$Caddress = "";
$errors = array(); 

// Database connection
$db = mysqli_connect('localhost', 'root', '', 'hc');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle booking submission
if (isset($_POST['HC_booking'])) {
    $CName = mysqli_real_escape_string($db, $_POST['CName']);
    $CNumber = mysqli_real_escape_string($db, $_POST['CNumber']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $Date = mysqli_real_escape_string($db, $_POST['Date']);
    $Caddress = mysqli_real_escape_string($db, $_POST['Caddress']);

    // Validation
    if (empty($CName)) { 
        array_push($errors, "Name is required"); 
    }
    if (empty($CNumber)) { 
        array_push($errors, "Phone number is required"); 
    }
    if (empty($Email)) { 
        array_push($errors, "Email is required"); 
    }
    if (empty($Date)) { 
        array_push($errors, "Date is required"); 
    }
    if (empty($Caddress)) { 
        array_push($errors, "Address is required"); 
    }
    
    // Insert booking if no errors
    if (count($errors) == 0) {
        $stmt = $db->prepare("INSERT INTO booking (CName, CNumber, Email, Date, Caddress) VALUES(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $CName, $CNumber, $Email, $Date, $Caddress);
        
        if ($stmt->execute()) {
            $_SESSION['CName'] = $CName;
            $_SESSION['success'] = "Your booking is successful";
            header('location: Thanks.php');
            exit();
        } else {
            array_push($errors, "Booking failed. Please try again.");
        }
        $stmt->close();
    }
}

mysqli_close($db);
?>