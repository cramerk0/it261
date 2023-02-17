<?php include('./includes/header-sidebar.php')?>

<link href="css/calculator.css" type="text/css" rel="stylesheet">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
        <label>NAME: </label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">

        <label>Total miles driving: </label>
        <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']);?>">

        <label>Speed typically driven (on a highway): </label>
        <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']);?>">

        <label>Hours per day planned on driving:  </label>
        <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']);?>">

        <label>Price of gas: </label>
        <ul>
            <li><input type="radio" name="gas" value="3" <?php if(isset($_POST['gas']) && $_POST['gas'] == 3) echo 'checked="checked"';?>>$3.00 USD</li>

            <li><input type="radio" name="gas" value="3.5" <?php if(isset($_POST['gas']) && $_POST['gas'] == 3.5) echo 'checked="checked"';?>>$3.50 USD</li>

            <li><input type="radio" name="gas" value="4" <?php if(isset($_POST['gas']) && $_POST['gas'] == 4) echo 'checked="checked"';?>>$4.00 USD</li>

            <li><input type="radio" name="gas" value="4.5" <?php if(isset($_POST['gas']) && $_POST['gas'] == 4.5) echo 'checked="checked"';?>>$4.50 USD</li>
        </ul>

        <label>Fuel efficiency: </label>
        <select name="fuel">
            <option value="" NULL <?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected = "unselected"';?>>Select one</option>
            <option value="great" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == 'great') echo 'selected = "selected"';?>>Great @ 40mpg</option>
            <option value="good" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == 'good') echo 'selected = "selected"';?>>Good @ 30mpg</option>
            <option value="fine" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == 'fine') echo 'selected = "selected"';?>>Fine @ 20mpg</option>
            <option value="poor" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == 'poor') echo 'selected = "selected"';?>>Poor @ 10mpg</option>
        </select>

        <input type="submit" value="Calculate">

        <p><a id="reset" href="">Reset</a></p>

    </fieldset>  
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['name'])) {
        echo '<p class="error">Please enter your name.</p>';
    }

    if(empty($_POST['miles'])) {
        echo '<p class="error">Please enter number of miles driving.</p>';
    }

    if(empty($_POST['speed'])) {
        echo '<p class="error">Please enter speed typically driven.</p>';
    }

    if(empty($_POST['hours'])) {
        echo '<p class="error">Please enter number of hours planned on driving.</p>';
    }

    if(empty($_POST['gas'])) {
        echo '<p class="error">Please select cost of gas.</p>';
    }

    if(empty($_POST['fuel'])) {
        echo '<p class="error">Please select fuel efficiency of your car.</p>';
    }
}

if(isset($_POST['name'],
    $_POST['miles'],
    $_POST['speed'],
    $_POST['hours'],
    $_POST['gas'])) {

        if($_POST['fuel'] ==  'great') {
                $fuel = 40;
            }
        
        elseif($_POST['fuel'] ==  'good') {
            $fuel = 30;
        }    

        elseif($_POST['fuel'] ==  'fine') {
            $fuel = 20;
        }

        else {
            $fuel = 10;
        }
        

    $name = $_POST['name'];
    $miles = floatval($_POST['miles']);
    $speed = floatval($_POST['speed']);
    $hours = floatval($_POST['hours']);
    $gas = $_POST['gas'];

    $time = $miles / $speed;
    $days = $time / $hours;
    $mpg = $miles / $fuel;
    $cost = $mpg * $gas;

    if(!empty($name && $miles && $speed && $hours && $gas && $fuel)) {

        echo '
        <div class="box">
        <div class="msg">
        <h2>Hello '.$name.', </h2>
        <p>You will be traveling a total of <b>'.number_format($time, 2).' hours</b>, taking <b>'.number_format($days, 2).' days</b>. You will be using <b>'.$mpg.' galllons</b> of gas, costing a total of <b>$'.number_format($cost, 2).' USD</b>.</p>
        </div>
        </div>
        ';
    }
}

include('./includes/footer.php')

?>