<?php

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">     

    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body class="<?php echo $body;?>">
    
    <header>
        <a href="it261/../index.php">
            <img src="../images/Edme_Logo.png" alt=" Edme logo">
        </a>

        <nav class="primary-nav">

            <ul>
            <?php
                foreach($nav as $key => $value) {
                    if(THIS_PAGE == $key) {
                        echo '<li><a style="color: #94D3C0"; href="'.$key.'">'.$value.'</a></li>';
                    }
                    else {
                        echo '<li><a style="color: #204152"; href="'.$key.'">'.$value.'</a></li>';
                    }
                }
            ?>
            </ul>

        </nav>
    </header>