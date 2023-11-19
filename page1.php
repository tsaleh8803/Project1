<?php
    session_start();
    if (!isset($_SESSION["user"])){
        header("Location: index.php");
    }
    
?>

<html>
    <head>
        <title>MyFirstWebPage</title>
        <link rel = "stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/icons.css">
    </head>

    <body>
        <div id = "page-header">
            <div id = "menu">
                <span><i class="ico burger-ico"></i>Menu</span>
                <div class ="dropdown-menu">
                    <ul>
                        <a href="page1.php">
                            <li>Home<i class="ico ico-l user-ico"></i></li>
                        </a>
                        <a href="page2.php">
                            <li>CV<i class="ico ico-l wallet-ico"></i></li>
                        </a>
                        <a href="page3.php">
                            <li>Gallery<i class="ico ico-l gallery-ico"></i></li>
                        </a>
                        <a href="page4.php">
                            <li>Contact Us</li>
                        </a>
                    </ul>
                </div>
            </div>
            <a href = "index.php">
                <div id = "lo">
                    <?php echo "Welcome " . $_SESSION['user'] . " - Logout";?>
                </div>
            </a>

        </div>
        <div id = "page-content">
            <div id ="page-title"><h1>Welcome to Tamer's Page!</h1></div>
            <br><br>
            <div id = "home-image" style = "float:right">
                <img src ="pictures/track1.jpeg">
            </div>
            <div id = "home-desc">
                Welcome to my personal website! I am a third year CS student at LAU with a minor in Mathematics. 
                My hobbies include sports like track and field, football, and volleyball, as well as playing music, reading,
                snowboarding, and watching movies.
                I am also an athlete, striving to become the fastest man in the country in the 100 and 200 meter sprints.
                My goal for this course is to learn how to design and implement dynamic websites from scratch, and to improve my
                creativity in general by creating beautiful website designs.
            </div>
            
        </div>
        
    </body>
</html>