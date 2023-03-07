<?php

include('config.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('Location:films.php');

}

$sql = 'SELECT * FROM films WHERE film_id = '.$id.'';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($conn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($conn)));

if(mysqli_num_rows($result) > 0) { 
    while($row = mysqli_fetch_assoc($result)) {

        $film = stripslashes($row['film']);
        $year = stripslashes($row['year']);
        $director = stripslashes($row['director']);
        $country = stripslashes($row['country']);
        $details = stripslashes($row['details']);
        $opinion = stripslashes($row['opinion']);
        $quotes = stripslashes($row['quotes']);
        $feedback = '';
    }

} else {
    $feedback = 'Issue with finding information. Try again.';
}

include('./includes/header.php');
?>

<div id="wrapper">
<main>
    <h1>Information about:<br> <?php echo $film;?></h1>
    <ul>
        <?php
        echo '
        <ul class="film">
            <li><b>About the Film: </b><br><p>'.$details.'</p></li>
            <li><b>Opinion and (slight) Analysis: </b><br><p>'.$opinion.'</p></li>
        </ul>
        ';
        ?>
    </ul>
    <p><a href="films.php">Return to the Films page</a></p>
</main>

<aside>
    <!-- <h2>Film poster</h2> -->
    <figure>
        <img src="images/films/film<?php echo $id;?>.png" alt="<? echo $film;?>">
        <figcaption>
            <?php
           echo  ''.$film.' ('.$year.'), dir. '.$director.'';
            ?>
        </figcaption>
    </figure>
    <p><i><?echo $quotes;?></i></p>
</aside>

<?php
    @mysqli_free_result($result);
    @mysqli_close($conn);
?>

</div>

<?php
include('./includes/footer.php');
