<?php

    session_start();
    if(isset($_POST["username"])&&isset($_POST["password"])){
        
        $user = new stdClass();
        $user->username=$_POST["username"];      //define variable $un and assign the username sent from the form
        $user->password=$_POST["password"];
        $success=login($user);
    }
    else{
        echo "<script>window.location.href='loginPage.php?error_code=1';</script>";
    } 

    if ($success){
        $_SESSION["user"]=$user->username;
        header("Location: page1.php");
    }
       
    else
        echo "<script>window.location.href='loginPage.php?error_code=0';</script>";

    //checks if a user exist
    //@param user is an boject with username aand password as properties
    //#return bool

    function login($user){
        $a_usernames=array("john.doe","jane.doe","johnny.doe");
        $a_passwords=array("pass","passw","passwd");
    
        $success=false;
    
        for($i=0;$i<sizeof($a_usernames);$i++){
            if (($user->username==$a_usernames[$i])&&($user->password==$a_passwords[$i])){
                $success=true;
                break;
            }
        }
        return $success;
    }
    
    
?>