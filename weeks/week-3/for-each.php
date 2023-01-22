<?php

echo '<h2>This will be the wine list</h2>';

$wines = array(
    'Cabernet',
    'Merlot',
    'Syrah',
    'Malbec',
    'Red Blend'
);

// since array cannot be echoed, use for-each loop
echo '<ul>';
foreach($wines as $key) {
    echo '<li>'.$key.'</li>';
    
}
echo '</ul>';


echo '<h2>Movies and Shows list. Both key and value</h2>';

// BLORBO FROM MY SHOWS LMAO
$shows = [
    'Crunchyroll' => 'Spy X Family',
    'Netflix' => 'Dragon Age: Absolution',
    'Funimation' => 'Revolutionary Girl Utena',
    'The Owl Club' => 'The Owl House',
    'Movie' => 'Portrait Of A Lady On Fire'
];

echo '<ul>';

foreach($shows as $key => $value) {
    echo '<li><b>'.$key.'</b>: '.$value.'</li>';
}

echo '</ul>';


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

?>