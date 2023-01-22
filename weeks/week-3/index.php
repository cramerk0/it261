<?php

echo '<h2>Time for navigation. Both key and value</h2>';

$nav = [
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
];

echo '<ul>';

foreach($nav as $key => $value) {
    echo '<li><a href="'.$key.'">'.$value.'</a></li>';
}

echo '</ul>';


echo '<h2>Navigation will display a different color when on the index.php</h2>';

// Defining a constant
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// if we are on this_page and index.php, do something

echo '<ul>';
foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
        echo '<li><a style="color: red"; href="'.$key.'">'.$value.'</a></li>';
    }
    else {
        echo '<li><a style="color: green"; href="'.$key.'">'.$value.'</a></li>';
    }
} // end foreach
echo '</ul>';

?>