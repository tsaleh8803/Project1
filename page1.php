<?php
    session_start();
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
                    <?php echo "welcome " . $_SESSION['user'] . " - Logout";?>
                </div>
            </a>

        </div>
        <div id = "page-content">
            <div id ="page-title"><h1>Welcome to Tamer's Page!</h1></div>
            <div id = "home-image">
                <img src ="pictures/track1.jpeg">
            </div>
            
        </div>
        
    </body>
</html>