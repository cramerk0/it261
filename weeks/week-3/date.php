<?php

    // date_default_timezone_set('America/Los_Angeles');

    echo date('Y');
    echo '<br>';

    echo date('l, F j, Y h:i A');
    echo '<br>';

    $name = 'Xiaoyan';
    $time = date('H:i A');
    echo $time;
    echo '<br>';

if ($time <= 11) {
    echo '<h2 style="color:orange;">Good morning, '.$name.'</h2>
    <img src="../images/sun.png" alt="sun">
    <p>It\'s time to get up</p>
    ';
    echo '<br>';

} elseif($time <= 17) {
    echo '<h2 style="color:blue;">Good afternoon, '.$name.'</h2>';
    echo '<br>';

} else {
    echo '<h2 style="color:green;">Good evening, '.$name.'</h2>
    <img src="../images/moon-rabbit.png" alt="moon rabbit">
    <p>It\'s time to get ready for bed</p>';
    echo '<br>';
}
?>