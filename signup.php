<?php
session_start();

if (
    isset($_POST["firstname"]) &&
    isset($_POST["lastname"]) &&
    isset($_POST["username"]) &&
    isset($_POST["pass"]) &&
    isset($_POST["sex"])
    ){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $username = $_POST["username"];
        $password = $_POST["pass"];
        $sex = $_POST["sex"];

        $file = fopen("signup-data.txt", "a");

        header("Location: index.php");

        if ($file) {
            fwrite($file, "Username: " . $username . "\n");
            fwrite($file, "Password: " . $password . "\n");
            fwrite($file, "First Name: " . $firstname . "\n");
            fwrite($file, "Last Name: " . $lastname . "\n");
            fwrite($file, "Sex: " . $sex . "\n");
            fwrite($file,"\n");
            fclose($file);
            echo "User data has been successfully saved.";
            
        } else {
            echo "Error: Unable to open the file.";
        }

        
        
    }
    else{
        echo 'alert("missing arguments")';
    }

?>
