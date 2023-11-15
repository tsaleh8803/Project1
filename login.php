<?php

    session_start();
    if(isset($_POST["username"])&&isset($_POST["password"])){
        
        $user = new stdClass();
        $user->username=$_POST["username"];      //define variable $un and assign the username sent from the form
        $user->password=$_POST["password"];
        $success=login($user);
    }
    else{
        echo "<script>window.location.href='index.php?error_code=1';</script>";
    } 

    if ($success){
        $_SESSION["user"]=$user->username;
        header("Location: page1.php");
    }
       
    else
        echo "<script>window.location.href='index.php?error_code=0';</script>";

    //checks if a user exist
    //@param user is an object with username aand password as properties
    //#return bool

    function login($user){
        $file = fopen('signup-data.txt','r');

        if ($file) {
            while (!feof($file)) {
                // Read a line from the file
                $line = fgets($file);
    
                // If the line contains "Username:", read the username
                if (strpos($line, 'Username:') !== false) {
                    $storedUsername = trim(str_replace('Username:', '', $line));
    
                    // Read the next line to get the stored password
                    $storedPassword = trim(str_replace('Password:', '', fgets($file)));
    
                    // Check if the provided username and password match
                    if ($storedUsername === $user->username && $storedPassword === $user->password) {
                        fclose($file); // Close the file
                        return true; // Valid credentials
                    }
                }
            }
            fclose($file);
            return false;
        }
        
    }   
?>