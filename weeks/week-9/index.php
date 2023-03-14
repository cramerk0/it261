<?php
session_start();

include('config.php');

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first.';
    header('Location:login.php');

}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');

}

include('./include/header.php'); ?>

<header>

    <?php if(isset($_SESSION['success'])): ?>

    <div class="success">
        <h3>
            <?php echo $_SESSION['success']; 
            unset($_SESSION['success']); ?>
        </h3>

    </div>

    <?php endif; ?>

    <?php 
    if(isset($_SESSION['username'])): ?>
    <div class="welcome-logout">
        <h3> Welcome, 
            <?= $_SESSION['username'] ?>
        ! </h3>

        <p><a href="index.php?logout='1'">Logout</a></p>

    </div>

    <?php endif; ?>

</header>

<div id="wrapper">
<h1>Welcome to the home page.</h1>


</div>

<?php
include('./include/footer.php');