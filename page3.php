<?php
    session_start();
    if (!isset($_SESSION["user"])){
        header("Location:../index.php");
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
                    <?php echo "welcome " . $_SESSION['user'] . " - Logout";?>
                </div>
            </a>
        </div>
        <div id = "page-content">
            <div id ="page-title"><h1>My First Gallery</h1></div>
            <br>
            <div id = "gallery">
                <div class = "gallery-img" id = "expand1">
                    <a href = "#expand1">
                        <img src = "pictures/travis.webp">
                    </a>
                </div>
                <div class = "gallery-img" id = "expand2">
                    <a href = "#expand2">
                        <img src = "pictures/travis1.jpeg">
                    </a>
                </div>
                <div class = "gallery-img" id = "expand3">
                    <a href = "#expand3">
                        <img src = "pictures/travis2.jpeg">
                    </a>
                </div>
                <a href = "#" id = "close">Close</a>
            </div>
            
        </div>
        
    </body>
</html>