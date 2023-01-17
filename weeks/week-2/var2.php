<?php

$name = 'Xiaoyan';
$first_name = 'Xiaoyan';
$last_name = 'He';
echo $first_name.' '.$last_name;
echo '<br>';

$name = 'Xiaoyan';
$name .= ' He';
echo $name;
echo '<br>';

$color = 'blue';
echo $color;
echo '<br>';

echo 'Xiaoyan\'s favorite color is '.$color.'';
echo '<br>';

$x = 20;
$y = 5;
$z = $x + $y;
echo $z;
echo '<br>';

$x += 5;
echo $x;
echo '<br>';

$x = 100;
echo $x += 20;
echo '<br>';

echo '<h3>Product, quanity, and tax</h3>';
echo '<br>';

$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;
echo $total;

echo '<h3>We would like the amount to reflect 2 decimal places</h3>';
echo '<br>';

$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;
$money = number_format($total, 2);
echo 'We have a total of <b> $'.$money.'</b>';
echo '<br>';

$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;
echo 'We have a total of <b> $'.number_format($money, 2).'</b>';
echo '<br>';

echo '<h3>Our second preset function is our date function</h3>';
echo date('Y');
echo '<br>';

echo date('l');
echo '<br>';

echo date('l jS \of F Y h:i:s A');
echo '<br>';

echo date('l jS \of F Y h:i A');
echo '<br>';

date_default_timezone_set('America/Los_Angeles');
echo '<br>';

echo date('l jS \of F Y h:i A');
echo '<br>';


echo '<h3>Arrays</h3>';
echo '<h4>Below is an indexed array</h4>';
echo '<br>';

$fruit[] = 'bannanas';
$fruit[] = 'cherries';
$fruit[] = 'melon';
$fruit[] = 'kiwi';
$fruit[] = 'oranges';
$fruit[] = 'apples';

echo $fruit[2];
echo '<br>';

$fruit = array(
    'bannanas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples'
);

$fruit = [
    'bannanas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples'
];

echo '<br>';

print_r($fruit);
echo '<br>';

var_dump($fruit);
echo '<br>';

echo '<h3>Now we have an associative array</h3>';

$nav = array(
    'index.php' => 'Home', // index is key Home is value
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

echo '<pre>';
var_dump($nav);
echo '</pre>';