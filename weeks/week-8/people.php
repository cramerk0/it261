<?php
include('config.php');
include('./include/header.php');

?>
<div id="wrapper">
<main>
    <h1>Welcome to the People Database Class Exercise</h1>
    <?php
        $sql = 'SELECT * FROM people';

        // Connect to database
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

        $result = mysqli_query($conn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($conn)));

        // If rows > 0
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                
                echo '
                <h2>Information about: '.$row['first_name'].'</h2>
                <ul>
                    <li><b>First Name: </b>'.$row['first_name'].'</li>
                    <li><b>Last Name: </b>'.$row['last_name'].'</li>
                    <li><b>Birthday: </b>'.$row['birthdate'].'</li>
                </ul>

                <p> For more information about '.$row['first_name'].', click <a href="people-view.php?id='.$row['people_id'].'">here</a></p>
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
    $photos[0] = 'photo1';
    $photos[1] = 'photo2';
    $photos[2] = 'photo3';
    $photos[3] = 'photo4';
    $photos[4] = 'photo5';

    function random_images($photos){
        $my_return = '';
        $i = rand(0, 4);
        $image = ''.$photos[$i].'.png';
        $my_return = '<img src="images/'.$image.'" alt="'.$photos[$i].'.png">';

        return $my_return;
    }

echo random_images($photos);
    ?>
</aside>

</div>

<?php
include('./include/footer.php');