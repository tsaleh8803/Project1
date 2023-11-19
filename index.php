<?php
session_start();
session_unset();
session_destroy();
if(isset($_GET["error_code"])){
    switch($_GET["error_code"]){
        case 0:
            echo "<script>alert('Incorrect username and/or password')</script>";
            break;

        case 1:
            echo "<script>alert('Missing arguments')</script>";
            break;
    }
}
?>

<html>
    <head>
        <title>Welcome to my portal</title>
        <link rel = "stylesheet" href="css/mforms.css">
        <link rel = "stylesheet" href="css/main.css">
    </head>
    <body id = "login-body">
        <div id="page-header"></div>
        <div id = "page-content">
            <div id ="page-title"><h1>Login</h1></div>
            <div class = "login-form-div">
                <form name="frmLogin" method="post" action="login.php" id="form-login">
                    
                    <label for="username">Username: </label><br>
                    <input type="text" class = "tf" name = "username" id="username"/><br><br>
                
                    <label for="password">Password: </label><br>
                    <input type="password" class = "tf" name = "password" id="password"/><br><br>
                    
                    <div class = "form-element">
                        <input type="button" class = "btn" value="Login" onclick="formLogin()">&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="button" class = "btn" value = "Clear" onclick="formCancel()">
                    </div> 
                    <div class = "form-element">
                        <a class = "form-link" href = "signupPage.php">Don't have an account? Sign Up</a>
                    </div>
                </form>
                
            </div>
            
        </div>
        <script>
            function formLogin(){
                var user=document.getElementById("username").value;
                var pass=document.getElementById("password").value;
                
                if (user=="" || pass==""){
                    alert("You must enter a username and password");
                }
                else{
                    document.getElementById("form-login").submit();
                }
            }
            function formCancel(){
                document.getElementById("username").value="";
                document.getElementById("password").value="";
            }
        </script>
    </body>
</html>