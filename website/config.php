<?php

ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
        $title = 'Home Page of our Website Project';
        $body = 'home';
        break;

    case 'about.php' :
        $title = 'About Page of our Website Project';
        $body = 'about inner';
        break;

    case 'daily.php' :
        $title = 'Daily Page of our Website Project';
        $body = 'daily inner';
        break;

    case 'project.php' :
        $title = 'Project Page of our Website Project';
        $body = 'project inner';
        break;

    case 'contact.php' :
        $title = 'Contact Page of our Website Project';
        $body = 'contact inner';
        break;

    case 'gallery.php' :
        $title = 'Gallery Page of our Website Project';
        $body = 'gallery inner';
        break;
}

$nav = [
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
];

function make_links($nav) {
    $my_return = '';

    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
        $my_return .= '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
        
        } else {
            $my_return .= '<li><a href="'.$key.'">'.$value.'</a></li>';
        }
    
    }

    return $my_return;

}
