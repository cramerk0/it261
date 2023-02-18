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
                echo make_links($nav);
            ?>
            </ul>

        </nav>

    </header>