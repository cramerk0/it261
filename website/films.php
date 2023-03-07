<?php
include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">
<main>
    <h1>10 Lesbian Films (and one about not)</h1>
    <?php
    $sql = 'SELECT * FROM films';

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

    $result = mysqli_query($conn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($conn)));

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            
            echo '
            <h2>'.$row['film'].'</h2>
            <ul class="film">
                <li><b>Year Released: </b>'.$row['year'].'</li>
                <li><b>Director: </b>'.$row['director'].'</li>
                <li><b>Writer: </b>'.$row['writer'].'</li>
                <li><b>Country: </b>'.$row['country'].'</li>
            </ul>

            <p>For more information about '.$row['film'].', click <a href="films-redirect.php?id='.$row['film_id'].'">here</a></p>
            ';
        }
    
    } else {
        echo 'Nobody is home';
    
    }

    // Release server
    @mysqli_free_result($result);

    // Close connection
    @mysqli_close($conn);
    ?> 

</main>
<aside>
    <h3>Display random images</h3>
    <?php 
    $photos[0] = 'film1';
    $photos[1] = 'film2';
    $photos[2] = 'film3';
    $photos[3] = 'film4';
    $photos[4] = 'film5';
    $photos[5] = 'film6';
    $photos[6] = 'film7';
    $photos[7] = 'film8';
    $photos[8] = 'film9';
    $photos[9] = 'film10';

    function random_images($photos){

        $poster = '';
        $i = rand(0, 9);
        $image = ''.$photos[$i].'.png';
        $poster = '<img src="images/films/'.$image.'" alt="'.$image.'">';

        return $poster;
    }

    echo random_images($photos);
    
    ?>
</aside>

</div>

<?php
include('./includes/footer.php');