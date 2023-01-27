<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Adder Assignment</title>

    <!-- added styling to match original -->
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    form {
        width: 350px;
        margin: auto;
        border: 1px solid red;
        padding: 10px;
    }

    h1 {
        color: green;
        text-align: center;
    }

    h2 {
        font-size: 1.5em;
        text-align: center;
    }
    
    p {
        color: red;
        text-align: center;
        font-size: .6em;
    }

    .error {
        color: red;
        font-style: italic;
        font-size: .9em;
        margin-top: 10px;
    }

    .box {
    width: 350px;
    /* border: 1px solid black; */
    margin: 20px auto;
    padding: 10px;
    }

</style>
</head>
<body>
<h1>Adder.php</h1> 
<!-- added method and fixed form and label-->
<form action="" method="post">
    <label>Enter the first number: </label>
    <!-- fixed Num1 to num1 -->
    <input type="text" name="num1">
    <br>
    <label>Enter the second number: </label>
    <input type="text" name="num2"><br>

    <!-- fixed incorrect qts and fixed closing form -->
    <input type="submit" value='Add Em!!'>
    

</form>


<!-- Moved php below HTML -->
<?php     //adder-wrong.php

// added num2
if (isset($_POST['num1'], $_POST['num2'])){

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

    // add if empty
    if(empty($_POST['num1'] && $_POST['num2'])) {
        echo '<p class="error"> Please fill out your numbers</p>';
    
    } else {

        $myTotal = $num1 + $num2;
    

// fixed Num2 to num2. changed -= to =


// added div for easier css mangement
// correct '..' in <h2>

echo '
    <div class="box">
        <h2>You added '. $num1 .' and '.$num2.'
        <p> and the answer is <br>
        '.$myTotal .'!</p>
        <p><a href="">Reset page</a>
    </div>
';

    }
// correct '..' again in <p>
// delete double qt (quote) and add single qt outside of </p>

}

// move ?/> and add DOCTYPE
// cleaned up

?>

</body>
</html>