<?php
include('config.php');
include('./includes/header.php');
?>

    <div id="wrapper">

        <div id="art"> 
            <img src="images/Mari art flower.png" alt="Mari">
        </div>

        <main>
            <div class="info">
                <h1>Web Authoring II</h1>
                <h2>Starting off with bare minimum knowledge let's gooo</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pharetra, turpis nec elementum vehicula, eros elit ornare nisl, sed auctor lacus odio nec sem. Quisque pretium sollicitudin vehicula. Duis tempor pellentesque lectus, in viverra odio. Aliquam convallis dapibus eros, sit amet aliquam nunc tempor eget. Integer volutpat consequat lacus in posuere. Vestibulum libero tellus, convallis et euismod sed, maximus ac metus. Nunc ac ullamcorper tellus, porta venenatis ligula. Curabitur eleifend, nibh a elementum ornare, enim massa posuere ex, tempor pulvinar enim elit et nunc. Morbi fringilla quam dolor, in placerat mi lobortis in. Aliquam vitae massa eu purus cursus auctor ut vel massa. Sed quis quam nibh. Pellentesque odio nisl, rhoncus eget turpis a, dignissim placerat orci. Praesent at sodales mauris. Suspendisse potenti.
                </p>

                <h2>Another Headline</h2>
                <p>
                    Etiam dolor lectus, sagittis non dui nec, feugiat luctus purus. Nullam nunc elit, convallis sit amet sem pretium, lobortis sodales tellus. In semper elementum ultricies. Donec quis diam hendrerit, ultricies est vel, varius mi. In hac habitasse platea dictumst. Nam in felis non turpis interdum dignissim sed eget leo. Vestibulum ultricies tempus blandit. Praesent bibendum leo non eleifend laoreet.
                </p>
            </div>
        </main>

        <aside>
            <div class="other-stuff">
                <h3>Headline 3</h3>
                <p>
                    Etiam dolor lectus, sagittis non dui nec, feugiat luctus purus. Nullam nunc elit, convallis sit amet sem pretium, lobortis sodales tellus. In semper elementum ultricies. Donec quis diam hendrerit, ultricies est vel, varius mi. In hac habitasse platea dictumst. Nam in felis non turpis interdum dignissim sed eget leo. Vestibulum ultricies tempus blandit. Praesent bibendum leo non eleifend laoreet.
                </p>
            </div>
        </aside>

        <div id="rand-img">
                <div class="stuff">
                <h2>Complimentary Owl Photo</h2>
                <?php 
                    $owls[0] = 'owl1';
                    $owls[1] = 'owl2';
                    $owls[2] = 'owl3';
                    $owls[3] = 'owl4';
                    $owls[4] = 'owl5';
                    
                    function owl($owls){
                        $my_return = '';
                        $i = rand(0, 4);
                        $image = ''.$owls[$i].'.png';
                        $my_return = '<img src="images/owls/'.$image.'" alt="'.$owls[$i].'.png">';
                    
                        return $my_return;
                    }
                    
                    echo owl($owls);
                ;?>
                </div>
        </div>

    <!-- end wrapper -->
    </div>

<?php
include('./includes/footer.php');