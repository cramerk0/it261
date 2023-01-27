<?php

// if a field is empty, return something

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

        echo 'Please fill out all of the fields';


    } else {
        echo $first_name;
        echo '<br>';
        echo $last_name;
        echo '<br>';
        echo $email;
        echo '<br>';
        echo $comments;
    }

} else {
    echo '
    <form action ="" method="post">

    <label>FIRST NAME</label>
    <input type="text" name="first_name">

    <label>LAST NAME</label>
    <input type="text" name="last_name">

    <label>EMAIL</label>
    <input type="email" name="email">
    
    <label>COMMENTS</label>
    <textarea name="comments"></textarea>

    <input type="submit" value="Confirm">

    </form>

    <p><a href="">RESET</p>
    ';

}
