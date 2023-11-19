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
            <div id ="page-title"><h1>Contact Us</h1></div>
            <br>
            <div id = "button-list">
                <a href = "https://www.linkedin.com/in/tamer-saleh-726100231/">
                    <div class = "button">LinkedIn</div>
                </a>
                <br>
                <a>
                    <div class = "button">+961 71 501 035</div>
                </a>
                <br>
                <a href = "mailto:tamersal03@gmail.com">
                    <div class = "button">Email Me</div>
                </a>
            </div>
            
        </div>
        
    </body>
</html>