<!-- random function -->
<?php

$roll = rand(1, 6);
// echo '<p>'.$roll.'</p>';
echo $roll;


echo '<h2>Two dice</h2>';
$roll1 = rand(1, 6);
$roll2 = rand(1, 6);
echo '<p>'.$roll1.' and '.$roll2.'</p>';


echo '<h2>Adding if else statements</h2>';
$roll1a = rand(1, 6);
$roll2a = rand(1, 6);

echo '<b>Dice 1:</b> '.$roll1a.' <b>Dice 2:</b> '.$roll2a.'';

if($roll1a == 6 && $roll2a == 6) {
    echo '<h3>Congratulations! You won!</h3>';

} elseif($roll1a != 6 && $roll2a != 6 && $roll1a == $roll2a) {
    echo '<h3>Congratulations! You still won!</h3>';

} else {
    echo '<h3>No win</h3>';
}


echo '<h2>Display images with rand()</h2>';

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4);

$selected_image = ''.$photos[$i].'.jpg';
echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'.jpg">';


echo '<h2>Creating a function</h2>';
function random_images($photos){
    $my_return = '';
    $i = rand(0, 4);
    $selected_image = ''.$photos[$i].'.jpg';
    $my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'.jpg">';

    return $my_return;
}

echo random_images($photos);
?>