<?php
include('config.php');

// Check if Email parameter is provided
if (!isset($_GET['Email'])) {
    die("Error: Email parameter is required");
}

$Email = mysqli_real_escape_string($con, $_GET['Email']);
$sql = mysqli_query($con, "SELECT * FROM booking WHERE Email='$Email'");
$user = mysqli_fetch_assoc($sql);

if (!$user) {
    die("Error: No booking found for this email");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        td, th { padding: 10px; border: 1px solid #ddd; }
        .text-center { text-align: center; }
    </style>
</head>
<body>
    <p class="text-center"><strong>User Booking Details</strong></p>
    <table>
        <tr>
            <td><b>Name:</b></td>
            <td><?php echo htmlspecialchars($user['CName']); ?></td>
            <td><b>Email:</b></td>
            <td><?php echo htmlspecialchars($user['Email']); ?></td>
        </tr>
        <tr>
            <td><b>Mobile:</b></td>
            <td><?php echo htmlspecialchars($user['CNumber']); ?></td>
            <td><b>Address:</b></td>
            <td><?php echo htmlspecialchars($user['Caddress']); ?></td>
        </tr>
        <tr>
            <td><b>Appointment Date:</b></td>
            <td><?php echo htmlspecialchars($user['Date']); ?></td>
            <td colspan="2"></td>
        </tr>
    </table>
</body>
</html>