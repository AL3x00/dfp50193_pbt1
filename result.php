<?php
require 'function.php';
$total = totalprice($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>
    <h1>Hair Garden Salon</h1>
    <p>Address: 6A, Jalan Khaya 1, Taman Khaya, 06010, Changlun, Kedah</p>
    <form method="post" action="index.php">
        <table border="1">
            <tr>
                <td>Service</td>
                <td><?php echo $_POST["service"]?></td>
            </tr>
            <tr>
                <td>Additional Services</td>
                <td><?php echo $_POST["wash"] . ' ' . $_POST["moisture"] . ' ' . $_POST["relax"] . ' ' . $_POST["bleach"];?></td>
            </tr>
            <tr>
                <td>Total Price</td>
                <td></td> 
            </tr>
            <tr>
                <td colspan="6">
                    <button type="submit">Back</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>