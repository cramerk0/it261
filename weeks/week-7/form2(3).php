<?php

ob_start();

$first_name = '';
$last_name = '';
$email = '';
$gender = '';
$phone = '';
$wines[] = '';
$region = '';
$comments = '';
$privacy = '';

$first_err = '';
$last_err = '';
$email_err = '';
$gender_err = '';
$phone_err = '';
$wines_err = '';
$region_err = '';
$comments_err = '';
$privacy_err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['first_name'])) {
        $first_err = 'Please enter your first name.';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        $last_err = 'Please enter your last name.';
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        $email_err = 'Please enter your email address.';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['gender'])) {
        $gender_err = 'Please select a gender.';
    } else {
        $gender = $_POST['gender'];
    }

    // if(empty($_POST['phone'])) {
    //     $phone_err = 'Please enter your phone number.';
    // } else {
    //     $phone = $_POST['phone'];
    // }

    if(empty($_POST['phone'])) {
        $phone_err = 'Please enter your phone number.';
    } elseif(array_key_exists('phone', $_POST)) {
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            $phone_err = 'Invalid format!';
        } else {
            $phone = $_POST['phone'];
        } 
    }

    // if(empty($_POST['wines'])) {
    //     $wines_err = 'What? No wines?';
    // } else {
    //     $wines = $_POST['wines'];
    // }

    if($_POST['region'] == NULL) {
        $region_err = 'Please select your region.';
    } else {
        $region = $_POST['region'];
    }

    if(empty($_POST['comments'])) {
        $comments_err = 'Please share your thoughts with us.';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])) {
        $privacy_err = 'Please agree to our privacy policy.';
    } else {
        $privacy = $_POST['privacy'];
    }


    function my_wines($wines) {
        $my_return = '';

        if(!empty($_POST['wines'])) {
            $my_return = implode(', ', $_POST['wines']);

        } else {
            $wines_err = 'Please select your wines';
        }

        return $my_return;
    }
    
    if(isset($_POST['first_name'],
            $_POST['last_name'],
            $_POST['email'],
            $_POST['gender'],
            $_POST['phone'],
            $_POST['wines'],
            $_POST['region'],
            $_POST['comments'],
            $_POST['privacy'])) {

        $to = 'kendall.cramer@seattlecolleges.edu'; 
        // 'szemo@mystudentswa.com';
        $subject = 'Test Email on ' .date('m/d/y, h i: A');
        $body = '
        First Name : '.$first_name.' '.PHP_EOL.'
        Last Name : '.$last_name.' '.PHP_EOL.'
        Email : '.$email.' '.PHP_EOL.'
        Gender : '.$gender.' '.PHP_EOL.'
        Phone : '.$phone.' '.PHP_EOL.'
        Wines : '.my_wines($wines).' '.PHP_EOL.'
        Region : '.$region.' '.PHP_EOL.'
        Comments : '.$comments  .' '.PHP_EOL.'
        ';

        $headers = [
        'From' => 'noreply@xiaonhe.com'
        ];

        if(!empty($first_name && 
        $last_name && 
        $email && 
        $gender && 
        $phone && 
        $region && 
        $wines && 
        $comments &&
        $privacy) && 
        preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
        

        mail($to, $subject, $body, $headers);
        header('Location:thx.php');

        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Week 6</title>

    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
        <legend>Contact Xiaoyan</legend>

        <label>First Name</label>
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);?>">
        <span class="error"><?php echo $first_err;?></span>

        <label>Last Name</label>
        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']);?>">
        <span class="error"><?php echo $last_err;?></span>

        <label>Email</label>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
        <span class="error"><?php echo $email_err;?></span>

        <label>Gender</label>
        <ul>
            <li>
                <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"';?>>Female
                <input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"';?>>Male
                <input type="radio" name="gender" value="nonbinary" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'nonbinary') echo 'checked="checked"';?>>Nonbinary (Non-bear-nary)
                <input type="radio" name="gender" value="none" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'none') echo 'checked="checked"';?>>None of these
            </li>
        </ul>
        <span class="error"><?php echo $gender_err;?></span>

        <label>Phone</label>
        <input type="tel" name="phone" placehoder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
        <span class="error"><?php echo $phone_err;?></span>

        <label>Favorite Wines</label>
        <ul>
            <li>
                <input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('cab', $wines)) echo 'checked="checked"';?>>Cabernet
                <input type="checkbox" name="wines[]" value="rose" <?php if(isset($_POST['wines']) && in_array('rose', $wines)) echo 'checked="checked"';?>>Rose
                <input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked="checked"';?>>Merlot
                <input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked="checked"';?>>Syrah
                <input type="checkbox" name="wines[]" value="red" <?php if(isset($_POST['wines']) && in_array('red', $wines)) echo 'checked="checked"';?>>Red Blend
                <input type="checkbox" name="wines[]" value="malbac" <?php if(isset($_POST['wines']) && in_array('malbac', $wines)) echo 'checked="checked"';?>>Malbac
            </li>
        </ul>
        <span class="error"><?php echo $wines_err;?></span>

        <label>Region</label>
        <select name="region">
            <option value="" NULL <?php if(isset($_POST['regions']) && $_POST['region'] == NULL) echo 'selected = "unselected"';?>>Select one</option>
            <option value="nw" <?php if(isset($_POST['region']) && $_POST['region'] == 'nw') echo 'selected = "unselected"';?>>Northwest</option>
            <option value="sw" <?php if(isset($_POST['region']) && $_POST['region'] == 'sw') echo 'selected = "unselected"';?>>Southwest</option>
            <option value="mw" <?php if(isset($_POST['region']) && $_POST['region'] == 'mw') echo 'selected = "unselected"';?>>Midwest</option>
            <option value="ec" <?php if(isset($_POST['region']) && $_POST['region'] == 'ec') echo 'selected = "unselected"';?>>East Coast</option>
            <option value="ne" <?php if(isset($_POST['region']) && $_POST['region'] == 'ne') echo 'selected = "unselected"';?>>Northeast</option>
        </select>
        <span class="error"><?php echo $region_err;?></span>

        <label>Comments</label>
        <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
        <span class="error"><?php echo $comments_err;?></span>

        <label>Privacy</label>
        <ul>
            <li>
            <input type="radio" name="privacy" value="agree" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked"';?>> Privacy Policy
            </li>
        </ul>
        <span class="error"><?php echo $privacy_err;?></span>

        <input type="submit" value="Submit">

        <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'];?> '" value="Reset">

    </fieldset>
</form>


    
</body>
</html>