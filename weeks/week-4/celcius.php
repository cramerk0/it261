<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Document</title>

    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Celcius Form Converter</h1>    

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <fieldset>
            <label>Enter your celcius value</label>
            <input type="number" name="cel">

            <input type="submit" value="Convert it">
        </fieldset>
    </form>

    <p><a href="">Reset</a></p>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if(isset($_POST['cel'])) {
            $cel = $_POST['cel'];
            // Use intval() to convert values to ints
            $cel_int = intval($cel);
            $far = ($cel_int * 9/5) + 32;

            if($cel == NULL) {
                echo '<p class="error">Please fill out the Celcius Value!</p>';
            
            } elseif($far <= 32) {
                echo '<p> '.$cel_int.' degrees Celcius is '.$far.' degrees Fahrenheit <br>
                It\'s cold outside!</p>';

            } elseif($far <= 40) {
                echo '<p> '.$cel_int.' degrees Celcius is '.$far.' degrees Fahrenheit <br>
                It\'s getting warmer!</p>';

            } elseif($far <= 50) {
                echo '<p> '.$cel_int.' degrees Celcius is '.$far.' degrees Fahrenheit <br>
                It\'s sweater weather!</p>';

            } elseif($far <= 60) {
                echo '<p> '.$cel_int.' degrees Celcius is '.$far.' degrees Fahrenheit <br>
                It\'s getting comfortable!</p>';

            } elseif($far <= 75) {
                echo '<p> '.$cel_int.' degrees Celcius is '.$far.' degrees Fahrenheit <br>
                We\'re going to the park!</p>';

            } elseif($far <= 90) {
                echo '<p> '.$cel_int.' degrees Celcius is '.$far.' degrees Fahrenheit <br>
                We may go to the beach!</p>';

            } else {
                echo '<p> '.$cel_int.' degrees Celcius is '.$far.' degrees Fahrenheit <br>
                We are at the beach!</p>';
            }
        }
    }

    ?>

</body>
</html>