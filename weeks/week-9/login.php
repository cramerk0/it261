<?php
include('server.php');
include('./include/header.php');
?>

<div id="wrapper">

<h1 class="center">Login page!</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
        <label>Username</label>
        <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']);?>">

        <label>Password</label>
        <input type="password" name="password">

        <button class="btn" type="submit" name="login_user">Login</button>
       
        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>
    </fieldset>

    <?php include('errors.php'); ?>

</form>

<p class="center">Haven't Registered? Please visit the <a href="register.php">registration page.</a></p>

</div>

<?php include('./include/footer.php');