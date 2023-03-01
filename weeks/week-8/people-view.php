<?php

include('config.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('Location: people.php');

}

// Select from table where people id = id

$sql = 'SELECT * FROM people WHERE people_id = '.$id.'';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($conn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($conn)));


if(mysqli_num_rows($result) > 0) { 
    while($row = mysqli_fetch_assoc($result)) {

        $first_name = stripslashes($row['first_name']);
        $last_name = stripslashes($row['last_name']);
        $email = stripslashes($row['email']);
        $birthdate = stripslashes($row['birthdate']);
        $occupation = stripslashes($row['occupation']);
        $details = stripslashes($row['details']);
        $blurb = stripslashes($row['blurb']);
        $feedback = '';
    }

} else {
$feedback = 'There is a problem here';

}

include('include/header.php');
?>

<div id="wrapper">
<main>
    <h1>Welcome to the People View Page</h1>
    <h2>Introducing <?php echo $first_name;?>'s Page</h2>
    <ul>
        <?php
        echo '
        <li><b>First Name: </b> '.$first_name.'</li>
        <li><b>Last Name: </b> '.$last_name.'</li>
        <li><b>Email: </b> '.$email.'</li>
        <li><b>Birthdate: </b> '.$birthdate.'</li>
        <li><b>Occupation: </b> '.$occupation.'</li>
        <li>
            <p>'.$details.'</p>
        </li>
        ';
        ?>
    </ul>
    <p><a href="people.php">Return to the People page</a></p>

</main>

<aside>
    <h2>This is the aside.</h2>
    <figure>
        <img src="images/people<?php echo $id;?>.jpg" alt="<? echo $first_name;?>">
        <figcaption>
            <?php
            echo '
                '.$first_name.' '.$last_name.', '.$occupation.'
            ';
            ?>
        </figcaption>
    </figure>
    <p><i><?echo $blurb;?></i></p>
</aside>

<?php
    @mysqli_free_result($result);


    // Close connection
    @mysqli_close($conn);
?>

</div>

<?php
include('./include/footer.php');
