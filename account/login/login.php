<?php
    session_start();

    if(isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])){
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $password=md5($pass);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            require_once('../../config/db_login.php');
            $result = $con->query("SELECT * FROM user WHERE email='$email' AND password='$password'");
            if($result->num_rows>0){
                $row = $result->fetch_assoc();
                    $_SESSION['username'] = $row['username'];
                    echo 'success';
            }
            $con->close();
        }
    }
?>