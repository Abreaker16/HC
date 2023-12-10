<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Pdf</title>
</head>
<body>
    <p style="text-align: center;">User Details</p>
    <table  width="100%" border="1">
        <tr>
            <td><b>Name:</b></td>
            <td><?=$user['CName']?></td>
            <td><b>Email:</b></td>
            <td><?=$user['Email']?></td>
        </tr>
        <tr>
            <td><b>Mobile:</b></td>
            <td><?=$user['CNumber']?></td>
            <td><b>Address:</b></td>
            <td><?=$user['Caddress']?></td>
        </tr>
        <tr>
            <td><b>Appointment Date:</b></td>
            <td><?=$user['Date']?></td>
        </tr>
    </table>
</body>
</html>