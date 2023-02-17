<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 4 Form Extra Credit</title>

    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
        <label>NAME</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">

        <label>EMAIL</label>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">

        <label>How much mony do you have?</label>
        <input type="number" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']);?>">

        <label>Choose your currency: </label>
        <ul>
            <li><input type="radio" name="currency" value=".017" <?php if(isset($_POST['currency']) && $_POST['currency'] == .017) echo 'checked="checked"';?>>Rubles</li>
            <li><input type="radio" name="currency" value=".76" <?php if(isset($_POST['currency']) && $_POST['currency'] == .76) echo 'checked="checked"';?>>Canadian Dollars</li>
            <li><input type="radio" name="currency" value="1.15" <?php if(isset($_POST['currency']) && $_POST['currency'] == 1.15) echo 'checked="checked"';?>>Pounds</li>
            <li><input type="radio" name="currency" value="1.00" <?php if(isset($_POST['currency']) && $_POST['currency'] == 1.00) echo 'checked="checked"';?>>Euros</li>
            <li><input type="radio" name="currency" value="0.0074" <?php if(isset($_POST['currency']) && $_POST['currency'] == .0074) echo 'checked="checked"';?>>Yen</li>
        </ul>

        <label>Choose your banking institution</label>
        <select name="bank">
            <option value="" NULL <?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected = "unselected"';?>>Select one</option>
            <option value="boa" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'boa') echo 'selected = "selected"';?>>Bank of America</option>
            <option value="chase" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'chase') echo 'selected = "selected"';?>>Chase</option>
            <option value="banner" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'banner') echo 'selected = "selected"';?>>Banner Bank</option>
            <option value="wells" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'wells') echo 'selected = "selected"';?>>Wells Fargo</option>
            <option value="becu" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'becu') echo 'selected = "selected"';?>>Boeing Credit Union</option>
        </select>

        <input type="submit" value="Convert">

        <p><a href="">Reset</a></p>

    </fieldset>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if(empty($_POST['name'])) {
        echo '<p class="error">Please fill out your name.</p>';
    }

    if(empty($_POST['email'])) {
        echo '<p class="error">Please fill out your email.</p>';
    }

    if(empty($_POST['amount'])) {
        echo '<p class="error">Please enter an amount.</p>';
    }

    if(empty($_POST['currency'])) {
        echo '<p class="error">Please choose a currency type.</p>';
    }

    if($_POST['bank'] == NULL) {
        echo '<p class ="error">Please choose a banking institution.</p>';
    }
} 
    
    if(isset($_POST['name'],
        $_POST['email'],
        $_POST['amount'],
        $_POST['currency'],
        $_POST['bank'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $amount = floatval($_POST['amount']);
        $currency = floatval($_POST['currency']);
        $bank = $_POST['bank'];

        $dollars = $currency * $amount;

        if(!empty($name && $email && $amount && $currency && $bank)) {
        
            echo '
            <div class="box">
            <h2>Hello '.$name.', </h2>
            <p>You now have <b>'.number_format($dollars, 2).' USD</b>. 
            We will email you at <b>'.$email.'</b> with your information, as well as deposit your funds at <b>'.$bank.' bank! </b></p>
            </div>
            ';
        }

        if($dollars > 3000){
            echo '
            <div id="good">
            <h2>I am happy! I have $'.$dollars.' USD!</h2>
            <iframe height="400"
            src="https://www.youtube.com/watch?v=0WY3IyVQ4eU?controls=0">
            </iframe>
            </div>
            ';

        } else {
            echo '
            <div id="sad">
            <h2>I am unhappy. I only have $'.$dollars.' USD.</h2>
            <iframe height="400"
            src="https://www.youtube.com/watch?v=XbK77nUozX0?controls=0">
            </iframe>
            </div>
            ';
        }

    }

?>

<footer>
    <ul>
        <li>Copyright &copy;2023</li>
        <li>All Rights Reserved</li>
        <li><a href="../index.php">Web Design by Xiaoyan</a></li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
    </ul>

    <script>
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
    </script>
</footer>

</body>
</html>