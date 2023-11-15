
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
                <form name="frmSignup" method="post" action="signup.php" id="form-login">

                    <div class = "form-element">
                        <label for="username">First Name: </label><br>
                        <input type="text" class = "tf" name = "firstname"/>
                    </div>
                    <div class = "form-element">
                        <label for="username">Last Name: </label><br>
                        <input type="text" class = "tf" name = "lastname" />
                    </div>
                    <div class = "form-element">
                        <label for="username">Username: </label><br>
                        <input type="text" class = "tf" name = "username" />
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
                        <label>Address: </label> <br>
                        <input type = "text" class = "tf" name="address" />
                    </div>

                    <div class = "form-element">
                        <input type="radio" name="sex" value = "M" id ="rb-male" checked><label for="rb-male">Male</label>
                        <input type="radio" name="sex" value = "F" id ="rb-female"><label for="rb-female">Female</label>
                    </div>

                    <div class = "form-element">
                        <input type ="checkbox" name="captcha" id = "cb-captcha"><label for="cb-captcha">I am human</label>
                    </div>
                    
                    <div class = "form-element">
                        <input type="button" class = "btn" value="Signup" onclick="formSignup()">&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="button" class = "btn" value = "Clear"onclick="formCancel()">
                    </div>
                    <div class = "form-element">
                        <a class = "form-link" href = "index.php">Already have an account? Login</a>
                    </div>
                    
                </form>
            </div>
            
        </div>
        <script>
            function formSignup(){
                var mform = document.querySelector("form[name='frmSignup']");
                var fn = mform.elements["firstname"].value;
                var ln = mform.elements["lastname"].value;
                var username = mform.elements["username"].value;
                var pass = mform.elements["pass"].value;
                var confPass = mform.elements["confPass"].value;
                var address = mform.elements["address"].value;
                var sex = mform.elements["sex"].value;
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
                mform.elements["username"].value = "";
                mform.elements["pass"].value = "";
                mform.elements["confPass"].value = "";
                mform.elements["address"].value = "";
                mform.elements["sex"].value = "M";
                mform.elements["captcha"].checked = false;
            }
        </script>
    </body>
</html>
