<?php
include('config.php');
include('./includes/header.php');

if(isset($_GET['today'])) {
    $today = $_GET['today'];

} else {
    $today = date('l');
}

switch($today) {
    case 'Monday' :
        $animal = '<h2>Monday is our Sleepy Red Fox Day</h2>';
        $pic = 'fox.png';
        $alt = 'Sleepy Fox';
        $content = '<p>The red fox is the largest fox native to the entire Northern Hemisphere including most of North America, Europe and Asia, plus parts of North Africa.</p>';
        break;

    case 'Tuesday' :
        $animal = '<h2>Tuesday is our Lazy Panda Day</h2>';
        $pic = 'panda.png';
        $alt = 'Sleepy Panda';
        $content = '<p>Pandas or Giant Pandas is a bear species native to China.  It is characterised by its bold black-and-white coat and rotund body. Though it is carnivorous, the giant panda is so lazy, more than 99% of it\'s main diet is bamboo shoots and leaves.</p>';

        break;

    case 'Wednesday' :
        $animal = '<h2>Wednesday is our Vibing Jaguar Day</h2>';
        $pic = 'jaguar.png';
        $alt = 'Jaguar';
        $content = '<p>The jaguar is a large cat species and the only living member of the genus Panthera native to the Americas. It is the largest cat species in the Americas and the third largest in the world. It\'s distinctively marked coat features pale yellow to tan colored fur covered by spots that transition to rosettes on the sides, although a melanistic black coat appears in some individuals.</p>';

        break;

    case 'Thursday' :
        $animal = '<h2>Thursday is our Twin Bobcat Day</h2>';
        $pic = 'bobcat.png';
        $alt = 'Silly Bobcats';
        $content = '<p>The bobcat, also known as the red lynx, is a medium-sized cat native to North America. It ranges from southern Canada through most of the contiguous United States to Oaxaca in Mexico. It has distinctive black bars on its forelegs and a black-tipped, stubby (or "bobbed") tail, from which it derives its name.</p>';

        break;

    case 'Friday' :
        $animal = '<h2>Friday is our Tired Tiger Day</h2>';
        $pic = 'tiger.png';
        $alt = 'Tired Tiger';
        $content = '<p>The tiger is the largest living cat species and a member of the genus Panthera. It is most recognisable for its dark vertical stripes on orange fur with a white underside. It once ranged widely from the Eastern Anatolia Region in the west to the Amur River basin in the east, and in the south from the foothills of the Himalayas to Bali in the Sunda Islands.</p>';

        break;

    case 'Saturday' :
        $animal = '<h2>Saturday is our Funky Red Panda Day</h2>';
        $pic = 'red panda.png';
        $alt = 'Funky Red Panda';
        $content = '<p>The red panda is a small mammal native to the eastern Himalayas and southwestern China. It has dense reddish-brown fur with a black belly and legs, white-lined ears, a mostly white muzzle and a ringed tail.</p>';

        break;

    case 'Sunday' :
        $animal = '<h2>Sunday is our Black Cat Day</h2>';
        $pic = 'domestic cat.png';
        $alt = 'Black Cat';
        $content = '<p>The cat is a domestic species of small carnivorous mammal. It is commonly referred to as the domestic cat or house cat to distinguish it from the wild members of the family. 
        <br>A black cat is a domestic cat with black fur that may be a mixed or specific breed, or a common domestic cat of no particular breed.</br></p>';

        break;
}

$nav = [
    'daily.php?today=Monday' => 'Monday',
    'daily.php?today=Tuesday' => 'Tuesday',
    'daily.php?today=Wednesday' => 'Wednesday',
    'daily.php?today=Thursday' => 'Thursday',
    'daily.php?today=Friday' => 'Friday',
    'daily.php?today=Saturday' => 'Saturday',
    'daily.php?today=Sunday' => 'Sunday'
];

?>

<body>
    
    <div id="wrapper">
       
        <div id="animal">
            <?php echo $animal; ?>
            <img src="images/<?php echo $pic;?>" alt="<?php echo $alt; ?>">
        <!-- end animal -->
        </div>

        <main>
            <div id="info">
                <?php echo $content ?>
            </div>
        </main>

        <aside>
            <div id="other-stuff">
                <h2>Check out our other days</h2>
                    <ul class="list">
                    <?php
                        foreach($nav as $key => $value) {
                            if($today == $value) {
                                echo '<li><a style="color: #94D3C0"; href="'.$key.'">'.$value.'</a></li>';
                            }
                            else {
                                echo '<li><a style="color: #204152"; href="'.$key.'">'.$value.'</a></li>';
                            }
                        }
                    ?>
            </ul>
                <!-- end other-stuff -->
            </div>
        </aside>

    <!-- end wrapper -->
    </div>

<?php include('./includes/footer.php'); ?>