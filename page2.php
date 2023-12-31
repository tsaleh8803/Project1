<?php
    session_start();
    if (!isset($_SESSION["user"])){
        header("Location: index.php");
    }
?>

<html>
    <head>
        <title>Tamer Saleh</title>
        <link rel = "stylesheet" href = "css/mainCV.css">
        <link rel="stylesheet" href="css/icons.css">
    </head>

    <body>

        <div class = "page-header">
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
        <div class = "cv-content">
            <div class = "cv-header-section">
                <div id = "cv-header-title">Tamer Saleh</div>
                <div id = "cv-header-socials">
                    <ul>
                        <li>Beirut, Lebanon</li>
                        <li>+961 71 501 035</li>
                        <li>tamersal03@gmail.com</li>
                        <li><a href = "https://www.linkedin.com/in/tamer- saleh-726100231/">https://www.linkedin.com/in/tamer- saleh-726100231/</a></li>
                    </ul>
                </div>
            </div>
            
            <div class = "cv-objective-section"> 
                <h2>Objective</h2>
                <p>Passionate, creative, fast-learning, analytical student-athlete with a strong tendency to learn new skills and hobbies. Looking forward to applying my enthusiasm and skills in order to solve difficult problems, overcome challenging tasks, and learn new concepts in a hands-on environment.</p>
            </div>

            <div class = "cv-experience-section">
                <h2>Experience</h2>
                <div class = "cv-experience-section-item">
                    <div class = "cv-experience-section-item-position">
                        <span>iOS Developer Intern |</span>
                        <span style = "font-weight: bold;">CME</span>
                    </div>
                    <div class = "cv-experience-section-item-date">July 2023 - July 2024</div>
                    <div class = "cv-experience-section-item-description">2 month internship where I worked with Xcode and iOS Mobile App Development.</div>
                </div>

                <div class = "cv-experience-section-item">
                    <div class = "cv-experience-section-item-position">
                        <span>Coding Instructor |</span>
                        <span style = "font-weight: bold;">Geek Express</span>
                    </div>
                    <div class = "cv-experience-section-item-date">July 2022 - Present</div>
                    <div class = "cv-experience-section-item-description">Game development instructor for kids ages 10-13 using Lua scripting language and Roblox Studio.</div>
                </div>

                <div class = "cv-experience-section-item">
                    <div class = "cv-experience-section-item-position">
                        <span>Math/Physics Tutor |</span>
                        <span style = "font-weight: bold;">Private</span>
                    </div>
                    <div class = "cv-experience-section-item-date">April 2022 - Present</div>
                    <div class = "cv-experience-section-item-description">Private tutoring for high school students. Focus is on IGCSE/IB Math and Physics.</div>
                </div>
            </div>

            <div class = "cv-skills-section">
                <h2>Skills</h2>
                <div class = "cv-skills-subsection">
                    <ul>
                        <li>Proficiency in Java, Python, C, and Swift</li>
                        <li>Game Development and Scripting(C#, Unity, Lua)</li>
                        <li> Web Development (HTML, CSS, JavaScript</li>
                    </ul>
                </div>
                <div class = "cv-skills-subsection">
                    <ul>
                        <li>SQL, R, Microsoft Access</li>
                        <li>Problem solving and analysis</li>
                        <li>Quick learner and flexible</li>
                    </ul>
                </div> 
            </div>

            <div class = "cv-projects-section">
                <h2>Projects</h2>
                <div>
                    <h3>Python Trivia Game</h3>
                    <p>Two-player game in which players must be the first to answer trivia questions correctly in order
                        to move forward and beat the opponent to the finish line.</p>
                </div>
                <div>
                    <h3>Java Wordle</h3>
                    <p>Wordle game that can be played on the terminal with all the same features.</p>
                </div>
                <div>
                    <h3>Microsoft Access Database System for School’s Career Guidance Counseling</h3>
                    <p>Design and implementation from scratch using Microsoft Access to assist with planning and managing information related to university applications for high school students. The database
                        included tables, forms, queries, and reports, allowing students to enter their information and interested university choices to apply to, as well as the university they committed to.</p>
                </div>
                <div>
                    <h3>iOS Products Store Application</h3>
                    <p>Fully functional application which takes products from the FakeStore API. Includes a Home page, Liked Products page, and Cart page. Implements Core Data, API calls, protocols, front end and back end in an MVC architecture.</p>
                </div>
            </div>
        </div>
        
        
    </body>
</html>