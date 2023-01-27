<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>

    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>

    <h1>Arthmetic Form</h1>

    <form action="" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name">

            <label>Phone</label>
            <input type="tel" name="phone">

            <label>How many Lattes</label>
            <input type="number" name="lattes">

            <label>How many Teas</label>
            <input type="number" name="teas">

            <label>How many Capuccinos</label>
            <input type="number" name="capuccinos">

            <label>Special Requests</label>
            <textarea name="comments"></textarea>

            <input type="submit" value="Send my order">
        </fieldset>
    </form>

    <p><a href="">Reset</a></p>

    <?php

    date_default_timezone_set('America/Los_Angeles');
    $our_time = date('H: i');

    if(isset($_POST['name'], 
    $_POST['phone'],
    $_POST['lattes'],
    $_POST['teas'],
    $_POST['capuccinos'],
    $_POST['comments'])){

        if(empty($_POST['name'] &&
        $_POST['phone'] &&
        $_POST['lattes'] &&
        $_POST['teas'] &&
        $_POST['capuccinos'] &&
        $_POST['comments'])){

            echo '<p class="error"> Please fill out all of the fields</p>';
    
        } else {

            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $lattes = $_POST['lattes'];
            $teas = $_POST['teas'];
            $capuccinos = $_POST['capuccinos'];
            $comments = $_POST['comments'];
            $total = $lattes + $teas + $capuccinos;

            if($our_time <= 11) {
                $our_time = 'Good Morning';

            } elseif($our_time <= 17) {
                $our_time = 'Good Afternoon';

            } else {
                $our_time = 'Good Evening';
            }
           
            echo '
                <div class="box">
                    <h2>'.$our_time.' '.$name.'!</h2>
                    <p>We have confirmed your order to this number <b>'.$phone.'</b> totalling '.$total.' beverages:</p>
                    <ul>
                        <li> '.$lattes.' lattes</li>
                        <li> '.$teas.' teas</li>
                        <li> '.$capuccinos.' capuccinos</li>
                    </ul>

                    <p>And this is your <b>special request:</b> '.$comments.'</p>
                    
                    <p>Thank you for choosing our establishment!</p>

                </div>        
            ';

        }

    }


    ?>
    
</body>
</html>