<?php

// conversions

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Currency Logic Basic</title>

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
                    <td>10007</td>
                    <td>$117.11</td>
                </tr>

                <tr>
                    <th>Pound Serling</th>
                    <td>500</td>
                    <td>$575</td>
                </tr>
                
                <tr>
                    <th>Canadian Dollars</th>
                    <td>5000</td>
                    <td>$3800</td>
                </tr>

                <tr>
                    <th>Euros</th>
                    <td>1200</td>
                    <td>$1200</td>
                </tr>

                <tr>
                    <th>Yen</th>
                    <td>2000</td>
                    <td>$14.80</td>
                </tr>

                <tr>
                    <th>Total</th>
                    <td>American Dollars</td>
                    <td>$5760</td>
                </tr>

            </table>

        <!-- end wrapper -->
        </div>

    </body>
</html>