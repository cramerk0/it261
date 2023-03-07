<!-- https://outforia.com/types-of-owls/ -->

<?php
include('config.php');
include('./includes/header.php');
$owls['Barn_Owl'] = 'barno_Found in North and South America';
$owls['Boreal_Owl'] = 'borea_Found in northern North America';
$owls['Burrowing_Owl'] = 'burro_Found in North and South America';
$owls['Eurasian_Eagle-Owl'] = 'euras_Found in Eurasia';
$owls['Great_Horned_Owl'] = 'great_Found in North and South America';
$owls['Jungle_Owlet'] = 'jungl_Found in India';
$owls['Northern_Long-eared_Owl'] = 'north_Found in Europe and North America';
$owls['Northern_Saw-Whet_Owl'] = 'sawwh_Found in North America';
$owls['Snowy_Owl'] = 'snowy_Found in the Artic';
$owls['Southern_Boobook'] = 'south_Found in Australia';
$owls['Pygmy_Owl'] = 'pygmy_Found in South America';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 7 - Pictures</title>

    <style>

        #wrapper {
            margin: 20px auto;
            max-width: 1200px;
            clear: both;
            overflow: hidden;   
        }

        table {
            margin: 50px;
            border: 1px solid black;
            border-collapse: collapse;
            background: var(--color);
        }

        td {
            border: 1px solid black;
        }

       #wrapper img {
            width: 100%;
            display: block;
        }
    </style>

</head>
<body>
    <div id="wrapper">

<h1>Animal</h1>

    <table>
        <?php foreach($owls as $name => $image) :?>
        <tr>
            <td><img src="images/gallery/<?php echo substr($image, 0, 5);?>.png" alt="<?php echo str_replace('_', ' ', $name);?>"></td>
            <td><?php echo str_replace('_', ' ', $name);?></td>
            <td><?php echo substr($image, 6, 50);?></td>
            <td><img src="images/gallery/owls/<?php echo substr($image, 0, 5);?>.png" alt="<?php echo str_replace('_', ' ', $name);?>"></td>            

        </tr>
        <?php endforeach ;?>
    </table>
    </div>
<?
include('./includes/footer.php');