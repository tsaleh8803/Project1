<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (
    isset($_POST["username"]) &&
    isset($_POST["firstname"]) &&
    isset($_POST["lastname"]) &&
    isset($_POST["pass"]) &&
    isset($_POST["sex"])
    ){
        $username = $_POST["username"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $password = $_POST["pass"];
        $sex = $_POST["sex"];
        echo "variables saved successfully";
    }
    else{
        echo "username not found";
    }
    
?>


<html>
    <head>
        <title>Welcome to my portal</title>
        <link rel = "stylesheet" href="css/main.css">
        <link rel = "stylesheet" href="css/mforms.css">
    </head>
    <body>
        <div id="page-header"></div>
        <div id = "page-content">
            
            <div class = "form-div">
                <div id ="page-title"><h1>Sign Up</h1></div>
                <form name="frmSignup" method="post" action="page1.php" id="form-login">

                    <div class = "form-element">
                        <label for="username">First Name: </label><br>
                        <input type="text" class = "tf" name = "firstname"/>
                    </div>
                    <div class = "form-element">
                        <label for="username">Last Name: </label><br>
                        <input type="text" class = "tf" name = "lastname" />
                    </div>
                    <div class = "form-element">
                        <label for="username">Email: </label><br>
                        <input type="text" class = "tf" name = "email" />
                    </div>
                    <div class = "form-element">
                        <label for="password">Password: </label><br>
                        <input type="password" class = "tf" name = "pass" />
                    </div>
                    <div class = "form-element">
                        <label for="password">Confirm Password: </label><br>
                        <input type="password" class = "tf" name = "confPass"/>
                    </div>
                    <div class = "form-element">
                        <input type="radio" name="sex" value = "M" id ="rb-male" checked><label for="rb-male">Male</label>
                        <input type="radio" name="sex" value = "F" id ="rb-female"><label for="rb-female">Female</label>
                    </div>
                    <div class = "form-element">
                        <label>Language: </label> 
                        <select name = "language">
                            <option value="-1">---</option>
                            <option value="en">English</option>
                            <option value="fr">French</option>
                        </select>
                    </div>

                    <div class = "form-element">
                        <input type ="checkbox" name="captcha" id = "cb-captcha"><label for="cb-captcha">I am human</label>
                    </div>
                    
                    <div class = "form-element">
                        <input type="button" class = "btn" value="Signup" onclick="formSignup()">&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="button" class = "btn" value = "Clear"onclick="formCancel()">
                    </div>
                    <div class = "form-element">
                        <a class = "form-link" href = "loginPage.php">Already have an account? Login</a>
                    </div>
                    
                    
                </form>
            </div>
            
        </div>
        <script>
            function formSignup(){
                var mform = document.querySelector("form[name='frmSignup']");
                var fn = mform.elements["firstname"].value;
                var ln = mform.elements["lastname"].value;
                var email = mform.elements["email"].value;
                var pass = mform.elements["pass"].value;
                var confPass = mform.elements["confPass"].value;
                var sex = mform.elements["sex"].value;
                var language = mform.elements["language"].value;
                var captcha=mform.elements["captcha"].checked;
                console.log(captcha);

                if ((pass!=confPass) || (pass=="")){
                    alert("passwords do not match");
                }
                else{
                    mform.submit();
                }
            }
            function formCancel(){
                var mform = document.getElementById("form-login");
                mform.elements["firstname"].value = "";
                mform.elements["lastname"].value = "";
                mform.elements["email"].value = "";
                mform.elements["pass"].value = "";
                mform.elements["confPass"].value = "";
                mform.elements["sex"].value = "M";
                mform.elements["language"].value = "-1";
                mform.elements["captcha"].checked = false;
            }
        </script>
    </body>
</html>

<?php
    

    $file = fopen("signup-data.txt", "a");

    if ($file) {
        fwrite($file, "Username: " . $username . "\n");
        fwrite($file, "First Name: " . $firstname . "\n");
        fwrite($file, "Last Name: " . $lastname . "\n");
        fwrite($file, "Password: " . $password . "\n");
        fwrite($file, "Sex: " . $sex . "\n");

        fclose($file);
        echo "User data has been successfully saved.";
    } else {
        echo "Error: Unable to open the file.";
    }
?>