<?php

$temp = 55;

if($temp == 60) {
    echo 'it is a semi-warm day';

} else {
    echo 'it may be getting warmer';
}

echo'<br>';

$new_temp = 99;

if($new_temp <= 60) {
    echo 'not a very warm day';

} elseif($new_temp <= 70) {
    echo 'it\'s getting warmer';

} elseif($new_temp <= 80) {
    echo 'we might be going to the beach';

} else {
    echo 'we will <b>definitely</b> go to the beach';
}

echo'<br>';

echo '<h2>This excersise will be about a salary, a bonus, and sales</h2>';

// salary of 95,000 - annual
// sales nee to be above 100,000 you will start making bonus
// 100,000 = 5%
// 120,000 = 10%
// 140,000 = 15%
// 150,000 = 20%

$salary = 95000;
$sales = 1121000;

// if sales <= 99,999 no bonus
// if sales <= 119,999 5%
// cont.

if($sales <= 99999) {
    echo 'no bonus';
    echo'<br>';
    echo '$'.number_format($salary, 2).' dollars';

} elseif($sales <= 119999) {
    $salary *= 1.05;
    echo '5% bonus';
    echo'<br>';
    echo '$'.number_format($salary, 2).' dollars';

} elseif($sales <= 139999) {
    $salary *= 1.10;
    echo '10% bonus';
    echo'<br>';
    echo '$'.number_format($salary, 2).' dollars';

} elseif($sales <= 149999) {
    $salary *= 1.15;
    echo '15% bonus';
    echo'<br>';
    echo '$'.number_format($salary, 2).' dollars';
} else {
    $salary *= 1.20;
    echo '20% bonus';
    echo '<br>';
    echo '$'.number_format($salary, 2).' dollars';
}