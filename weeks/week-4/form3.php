<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3</title>

    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>My Form 3.php</h1>
    
    <form action="" method="post">
        <fieldset>
            <label>First Name</label>
            <input type="" name="first_name">
            
            <label>Last Name</label>
            <input type="" name="last_name">
            
            <label>Email</label>
            <input type="" name="email">
            
            <label>Comments</label>
            <textarea name="comments"></textarea>
        
            <input type="submit" value="Confirm">

            <p><a href="">Reset</a></p>
        </fieldset>
    </form>

    <?php
    if(isset($_POST['first_name'], 
    $_POST['last_name'],
    $_POST['email'],
    $_POST['comments'])){
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

        if(empty($_POST['first_name'] &&
        $_POST['last_name'] &&
        $_POST['email'] &&
        $_POST['comments'])){

            echo '<p class="error"> Please fill out all of the fields</p>';
       
        } else {
            echo '
                <div class="box">
                    <h2>Hello '.$first_name.'  '.$last_name.'</h2>
                    <p>We have recieved your <b>email as:</b> '.$email.' and will
                    be reviewing your <b>comments:</b> '.$comments.'</p>
                </div>        
            ';
        }

    }

    ?>
</body>
</html>