<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Garden Salon</title>
</head>

<body>
    <h1>Hair Garden Salon</h1>
    <p>Address: 6A, Jalan Khaya 1, Taman Khaya, 06010, Changlun, Kedah</p>
    <form method="post" action="result.php">
        <table border="1">
            <tr>
                <td>Services</td>
                <td>Price</td>
                <td>Select Option</td>
                <td>Additional Services</td>
                <td>Price</td>
                <td>Select Option</td>
            </tr>
            <tr>
                <td>Hair Cut</td>
                <td>RM 10.00</td>
                <td><input type="radio" name="service" value="Hair Cut"></td>
                <td>Hair Wash</td>
                <td>RM 5.00</td>
                <td><input type="checkbox" name="wash" value="Hair Wash"></td>
            </tr>
            <tr>
                <td rowspan="2">Hair Treatment</td>
                <td rowspan="2">RM 20.00</td>
                <td rowspan="2"><input type="radio" name="service" value="Hair Treatment"></td>
                <td>Moisture Treatment</td>
                <td>RM 5.00</td>
                <td><input type="checkbox" name="moisture" value="Moisture Treatment"></td>
            </tr>
            <tr>
                <td>Relax Treatment</td>
                <td>RM 5.00</td>
                <td><input type="checkbox" name="relax" value="Relax Treatment"></td>
            </tr>
            <tr>
                <td>Hair Dye</td>
                <td>RM 50.00</td>
                <td><input type="radio" name="service" value="Hair Dye"></td>
                <td>Hair Bleach</td>
                <td>RM 20.00</td>
                <td><input type="checkbox" name="bleach" value="Hair Bleach"></td>
            </tr>
            <tr>
                <td colspan="6">
                    <button type="submit">Pay</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>