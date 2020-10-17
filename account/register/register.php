<?php

    if(isset($_POST['register']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $password=md5($pass);

        if (filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z0-9]*$/",$username)){
            require_once('../../config/db_login.php');
            $result = $con->query("SELECT * FROM user WHERE email='$email'");
            if($result->num_rows == 0){
                $result = $con->query("SELECT * FROM user WHERE username='$username'");
                if($result->num_rows == 0){
                    $con->query("INSERT INTO user(username,email,password) VALUE('$username','$email','$password')");
                    echo 'success';
                }
                else{
                    echo 'username';
                }
            }
            else{
                echo 'email';
            }
            $con->close();
        }
    }
?>