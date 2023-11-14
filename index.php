<?php
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
    <body>
        <div id="page-header"></div>
        <div id = "page-content">
            <div id ="page-title"><h1>Login</h1></div>
            <div>
                <form name="frmLogin" method="post" action="login.php" id="form-login">
                    <label for="username">Username: </label><br>
                    <input type="text" name = "username" id="username"/><br><br>
                    <label for="password">Password: </label><br>
                    <input type="password" name = "password" id="password"/><br><br>
                    <input type="button" value="Login" onclick="formLogin()">&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" value = "Clear" onclick="formCancel()">
                </form>
            </div>
            <a href = "signup.php">Sign Up</a>
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