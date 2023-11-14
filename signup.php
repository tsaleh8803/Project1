<?php
session_start();

if (
    isset($_POST["firstname"]) &&
    isset($_POST["lastname"]) &&
    isset($_POST["pass"]) &&
    isset($_POST["sex"])
    ){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $password = $_POST["pass"];
        $sex = $_POST["sex"];
        echo "variables saved successfully";

        $file = fopen("signup-data.txt", "a");

        if ($file) {
            fwrite($file, "Username: " . $username . "\n");
            fwrite($file, "First Name: " . $firstname . "\n");
            fwrite($file, "Last Name: " . $lastname . "\n");
            fwrite($file, "Password: " . $password . "\n");
            fwrite($file, "Sex: " . $sex . "\n");

            fclose($file);
            echo "User data has been successfully saved.";
            $_SESSION["user"]=$user->username;
            header("Location: page1.php");
        } else {
            echo "Error: Unable to open the file.";
        }
        
    }
    else{
        echo "username not found";
    }

?>
