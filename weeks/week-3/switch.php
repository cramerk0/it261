<?php
// isset function - has something been set

if(isset($_GET['today'])) {
    $today = $_GET['today'];

} else {
    $today = date('l');
}

switch($today) {
    case 'Monday' :
        $tea = '<h2>Monday is our Oolong Tea Day</h2>';
        $pic = 'oolong.png';
        $alt = 'Oolong Tea';
        $content = '<p>Oolong is a traditional Chinese tea. Most oolong teas, especially those of fine quality, involve unique tea plant cultivars that are exclusively used for particular varieties. Oolong is especially popular in south China and among ethnic Chinese in Southeast Asia as is the Fujian preparation process known as the Gongfu tea ceremony.</p>';
        
        break;

    case 'Tuesday' :
        $tea = '<h2>Tuesday is our Green Tea Day</h2>';
        $pic = 'green.png';
        $alt = 'Green Tea';
        $content = '<p>Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process which is used to make oolong teas and black teas. Green tea originated in China, and since then its production and manufacture has spread to other countries in East Asia. </p>';

        break;

    case 'Wednesday' :
        $tea = '<h2>Wednesday is our Jasmine Tea Day</h2>';
        $pic = 'jasmine.png';
        $alt = 'Jasmine';
        $content = '<p>Jasmine tea is tea scented with the aroma of jasmine blossoms. Typically, jasmine tea has green tea as the tea base; however, white tea and black tea are also used. The resulting flavour of jasmine tea is subtly sweet and highly fragrant. It is the most famous scented tea in China.
        <br>
        The jasmine plant is believed to have been introduced into China from eastern South Asia via India during the Han Dynasty (206 BC to 220 AD),[2] and was being used to scent tea around the fifth century. However, jasmine tea did not become widespread until the Qing Dynasty (1644 to 1912 AD), when tea started to be exported in large quantities to the West. </br></p>';

        break;

    case 'Thursday' :
        $tea = '<h2>Thursday is our White Tea Day</h2>';
        $pic = 'white.png';
        $alt = 'White Tea';
        $content = '<p>White tea may refer to one of several styles of tea which generally feature young or minimally processed leaves of the Camellia sinensis plant.
        <br>
        It is harvested primarily in China, mostly in the Fujian province, but more recently produced in Taiwan, Eastern Nepal, Thailand, Galle (Southern Sri Lanka) and northeast India. </br></p>';

        break;

    case 'Friday' :
        $tea = '<h2>Friday is our Ginger Tea Day</h2>';
        $pic = 'ginger.png';
        $alt = 'Ginger Tea';
        $content = '<p>Ginger tea is a herbal beverage that is made from ginger root. It has a long history as a traditional herbal medicine in East Asia, South Asia, Southeast Asia and West Asia.</p>';

        break;

    case 'Saturday' :
        $tea = '<h2>Saturday is our Black Tea Day</h2>';
        $pic = 'black.png';
        $alt = 'Black Tea';
        $content = '<p>Black tea, also translated to red tea in various East Asian languages, is a type of tea that is more oxidized than oolong, yellow, white and green teas. Black tea is generally stronger in flavour than other teas. 
        <br>
        First originating in China, the beverage\'s name there is hong cha due to the color of the oxidized leaves when processed appropriately. Today, the drink is widespread throughout East and Southeast Asia, both in consumption and harvesting, including in China, Japan, Korea and Singapore. Similar variants are also available in South Asian countries.</br></p>';

        break;

    case 'Sunday' :
        $tea = '<h2>Sunday is our Bubble Tea Day</h2>';
        $pic = 'bubble tea.png';
        $alt = 'Bubble Tea';
        $content = '<p>Bubble tea is a tea-based drink that originated in Taiwan in the early 1980s. Taiwanese immigrants brought it to the United States in the 1990s, initially in California through regions like Los Angeles county, but has likewise spread to other countries where there is a large East Asian diasporic population.
        <br>
        Bubble tea most commonly consists of tea accompanied by chewy tapioca balls ("boba" or "pearls"), but it can be made with other toppings as well, such as grass jelly, aloe vera, or red bean. It has many varieties and flavors, but the two most popular varieties are pearl black milk tea and pearl green milk tea ("pearl" signifies the tapioca balls at the bottom). </br></p>';

        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        #wrapper {
            width: 940px;
            margin: 20px auto;
        }

        h1, h2 {
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 20px;
        }

        img {
            width: 100%;
            margin-bottom: 20px;
        }

    </style>

</head>
<body>
    
    <div id="wrapper">
        <h1>Switch Classwork Exersise</h1>
        <?php echo $tea; ?>

        <img src="../images/<?php echo $pic;?>" alt="<?php echo $alt; ?>">

        <?php echo $content ?>

        <h2>Check out or Daily Specials</h2>
        <ul>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
        </ul>


    <!-- end wrapper -->
    </div>

</body>
</html>