<?php

// conversions

$ruble_rate = 0.017;
$pound_rate = 1.15;
$canadian_rate = .76;
$euro_rate = 1.00;
$yen_rate = .0074;


$rubles = 10007;
$pounds = 500;
$canadian = 5000;
$euros = 1200;
$yen = 2000;

$ruble_convert = $rubles * $ruble_rate;
$pound_convert = $pounds * $pound_rate;
$canadian_convert = $canadian * $canadian_rate;
$euro_convert = $euros * $euro_rate;
$yen_convert = $yen * $yen_rate;

$total = $ruble_convert + $pound_convert + $canadian_convert + $euro_convert + $yen_convert;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Currency Efficient</title>

        <!-- <link href="css/styles.css" type="text/css" rel="stylesheet"> -->

        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            #wrapper {
                width: 500px;
                margin: 30px auto;
            }

            table {
                border: 1-x solid orange;
                border-collapse: collapse;
                width: 500px;
            }

            th, td {
                border: 1px solid orange;
                padding: 8px;
            }

            h1, h2, h3 {
                text-align: center;
            }
        </style> 

    </head>

    <body>
        
        <div id="wrapper">
            <h1>After our world-wind travels, we have returned home with the following currencies</h1>
           
            <ul>
                <li>Rubles</li>
                <li>Pound Sterling</li>
                <li>Canadian Dollar</li>
                <li>Euros</li>
                <li>Yen</li>
            </ul>

            <h2>What shall we do?</h2>
            
            <table>
                <tr>
                    <th colspan="2">International Currency</th>
                    <th>USD</th>
                </tr>

                <tr>
                    <th>Rubles</th>
                    <td><?php echo $rubles; ?> </td>
                    <td>$<?php echo ''.number_format($ruble_convert, 2).''; ?></td>
                </tr>

                <tr>
                    <th>Pound Serling</th>
                    <td><?php echo $pounds; ?></td>
                    <td>$<?php echo ''.number_format($pound_convert, 2).''; ?></td>
                </tr>
                
                <tr>
                    <th>Canadian Dollars</th>
                    <td><?php echo $canadian; ?></td>
                    <td>$<?php echo ''.number_format($canadian_convert, 2).''; ?></td>
                </tr>

                <tr>
                    <th>Euros</th>
                    <td><?php echo $euros; ?></td>
                    <td>$<?php echo ''.number_format($euro_convert, 2).''; ?></td>
                </tr>

                <tr>
                    <th>Yen</th>
                    <td><?php echo $yen; ?></td>
                    <td>$<?php echo ''.number_format($yen_convert, 2).''; ?></td>
                </tr>

                <tr>
                    <th>Total</th>
                    <td>American Dollars</td>
                    <td>$<?php echo ''.number_format($total).''; ?></td>
                </tr>

            </table>

            <!-- .floor rounds down -->
            <!-- .ceiling rounds up -->

        <!-- end wrapper -->
        </div>

    </body>
</html>