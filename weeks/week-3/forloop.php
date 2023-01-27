<?php

// $far = ($cel * 9/5) + 32

?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Table</title>

    <style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

table {
    width: 500px;
    margin: 20px auto;
    border-collapse: collapse;
    border: 1px solid lightblue;
}

td, th {
    padding: 5px;
    border-collapse: collapse;
    border: 1px solid lightblue;
}

h1, h2 {
    text-align: center;
    margin: 10px 0;
    color: gray;
}
    </style>

</head>
<body>
    <h1>Celcius / Fahrenheit Table</h1>    

    <table>
        <tr>
            <th>Celcius</th>
            <th>Fahrenheit</th>
        </tr>

        <?php
        for($cel = 0; $cel <= 100; $cel += 2) {
            $far = ($cel * 9/5) + 32;
            echo '<tr>';
            echo '<td>'.$cel.' degrees</td>';
            echo '<td>'.floor($far).' degrees</td>';
            echo '</tr>';
        }

        ?>
        
    </table>

    <h1>Kilometer / Miles Table</h1>

    <table>
        <tr>
            <th>Kilometer</th>
            <th>Miles</th>
        </tr>

        <?php
        for($kil = 0; $kil <= 100; $kil += 5) {
            $mil = $kil * .621371;
            echo '<tr>';
            echo '<td>'.$kil.' km</td>';
            echo '<td>'.number_format($mil, 3).' m</td>';
            echo '</tr>';
        }
        ?>
        
    </table>

</body>
</html>

