<!-- 108.167.140.136 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet"> 

    <link href="css/styles.css" type="text/css" rel="stylesheet">

</head>

<body>

    <div class="sidebar">
        <a href="index.php">
            <!-- BIG ASS IMAGE LMAO -->
            <img src="images/Edme_Logo.png" alt="logo">
        </a>
        
        <div id="line"></div>

<!-- i just wanted an arrow so badly man :weary-emoji: -->
        <div class="btop">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="arrow-up">
                    <line x1="12" y1="19" x2="12" y2="5"></line>
                    <polyline points="5 12 12 5 19 12"></polyline>
                </svg>
            </a>
        <!-- end btop -->
        </div>
    <!-- end sidebar -->
    </div>


    <div id="wrapper">

        <header>
            <h1>Xiaoyan's Portal Page</h1>

                <nav id="primary-nav">           
                    <ul>
                        <li><a href="">Switch</a></li>
                        <li><a href="">Troubleshoot</a></li>
                        <li><a href="">Caclulator</a></li>
                        <li><a href="">Email</a></li>
                        <li><a href="">Database</a></li>
                        <li><a href="">Gallery</a></li>
                    </ul>
                </nav>
        </header>

        
        <main>
            <h2>IT 261 Winter Quarter</h2>
            <img id="self" src="images/Snapchat.png" alt="Picture I found">
            
            <div id="description">
                <p>
                    Hi! I'm Xiaoyan, pronounced Shao-yan. I'm an aspiring 
                    musician, producer, and web developer (maybe). In my free time, I 
                    like to play video games or make music.
                    <br>I also love to cook. I'm always trying to learn new dishes to make 
                    and share with my roommates and family.  
                </p>
            <!-- end description -->
            </div>

            <img id="MAMP" src="images/MAMP.png" alt="MAMP thingy">
            <br>
            <img id="error" src="images/MAMP-error.png" alt="MAMP error">
        </main>


        <aside>
        <div id="class-stuff">
            <h2>Weekly Class Exercises</h2>
            
            <h3>Week 2</h3>
            <ul>
                <li><a href="weeks/week-2/var.php">var.php</a></li>
                <li><a href="weeks/week-2/var2.php">var2.php</a></li>
                <li><a href="weeks/week-2/currency-logic.php">currency-logic.php</a></li>
                <li><a href="weeks/week-2/currency.php">currency.php</a></li>
                <li><a href="weeks/week-2/heredoc.php">heredoc.php</a></li>
            </ul>
    
            <h3>Week 3</h3>
            <ul>
                <li><a href="weeks/week-3/if.php">if.php</a></li>
                <li><a href="weeks/week-3/date.php">date.php</a></li>
                <li><a href="weeks/week-3/for-each.php">for-each.php</a></li>
                <li><a href="weeks/week-3/forloop.php">forloop.php</a></li>
                <li><a href="weeks/week-3/switch.php">switch.php</a></li>
            </ul>

            <h3>Week 4</h3>
            <ul>
                <li><a href="weeks/week-4/form-get.php">form-get.php</a></li>
                <li><a href="weeks/week-4/form1.php">form1.php</a></li>
                <li><a href="weeks/week-4/form2.php">form2.php</a></li>
                <li><a href="weeks/week-4/form3.php">form3.php</a></li>
                <li><a href="weeks/week-4/form-arithmetic.php">form-arithmetic.php</a></li>
                <li><a href="weeks/week-4/celcius.php">celcius.php</a></li>
            </ul>

            <h3>Week 5</h3>
            <ul>
                <li><a href="weeks/week-5/currency1.php">currency1.php</a></li>
                <li><a href="weeks/week-5/currency2.php">currency2.php</a></li>
                <li><a href="weeks/week-5/currency3.php">currency3.php</a></li>
                <li><a href="weeks/week-5/currency4.php">currency4.php</a></li>
                <li><a href="weeks/week-5/null.php">null.php</a></li>
            </ul>

            <h3>Week 6</h3>
            <ul>
                <li><a href="weeks/week-6/form1.php">form1.php</a></li>
                <li><a href="weeks/week-6/functions.php">functions.php</a></li>
                <li><a href="weeks/week-6/implode.php">implode.php</a></li>
            </ul>

            <h3>Week 7</h3>
            <ul>
                <li><a href="weeks/week-7/random.php">random.php</a></li>
                <li><a href="weeks/week-7/strings.php">strings.php</a></li>
                <li><a href="weeks/week-7/pictures.php">pictures.php</a></li>
            </ul>

            <h3>Week 8</h3>
            <ul>
                <li><a href="weeks/week-8/people.php">people.php</a></li>
            </ul>

        </div>
        </aside>


    <!-- end wrapper -->
    </div>


    <footer>
        <ul>
            <li>Copyright &copy;2023</li>
            <li>All Rights Reserved</li>
            <li><a href="../index.php">Web Design by Xiaoyan</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>

        <script>
            document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>
    </footer>

</body>
</html>
