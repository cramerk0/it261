<?php
session_start();
include('config.php');
include('include/header.php');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

if(isset($_POST['reg_user'])) {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

    if(empty($first_name)) {
        array_push($errors, 'First name is required.');
    }

    if(empty($last_name)) {
        array_push($errors, 'Last name is required.');
    }

    if(empty($email)) {
        array_push($errors, 'Email is required.');
    }

    if(empty($username)) {
        array_push($errors, 'Username is required.');
    }

    if(empty($password_1)) {
        array_push($errors, 'Password is required.');
    }

    if($password_1 != $password_2) {
        array_push($errors, 'Passwords do not match.');
    }


    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";

    $result = mysqli_query($conn, $user_check_query) or die(myError(__FILE__, __LINE__, mysqli_error($conn)));

    $row = mysqli_fetch_assoc($result);

    if($row) {

        if($rows['username'] == $username) {
            array_push($errors, 'Username already exists.');
        }

        if($rows['email'] == $email) {
            array_push($errors, 'Email already exists.');
        }
    }

    if(count($errors) == 0) {
        $password = md5($password_1);

        $query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";

        mysqli_query($conn, $query);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = $sucess;

        // redirect
        header('Location:login.php');
    } 
}

if(isset($_POST['login_user'])) {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(empty($username)) {
        array_push($errors, 'Username is required.');
    }

    if(empty($password)) {
        array_push($errors, 'Password is required.');
    }

    if(count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        $results = mysqli_query($conn, $query);

        if(mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = $sucess;

            header('Location:index.php');

        } else {
            array_push($errors, 'Wrong username/password.');
        }
    }
}