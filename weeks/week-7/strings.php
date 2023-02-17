<?php
$statement = 'Presently, I am reading the Looming Tower';

echo $statement;
echo '<br>';

echo substr($statement, 0);
echo '<br>';

echo substr($statement, 1);
echo '<br>';

echo substr($statement, 11);
echo '<br>';

echo '<h2>Display - I am reading</h2>';
echo substr($statement, 11, 13);
echo '<br>';

echo '<h2>Display - Looming Tower</h2>';
echo substr($statement, -13, 7);
echo '<br>';

echo '<h2>Display - ently, I am</h2>';
echo substr($statement, 4, 11);
echo '<br>';

echo '<h2>Display - ng</h2>';
echo substr($statement, -20, 2);
echo '<br>';

echo '<h2>Using str_replace()</h2>';
$statement2 = 'Hulu\'s rendition of the Looming Tower is based on the book named the Looming Tower';
echo str_replace('the', 'The', $statement2);
echo '<br>';