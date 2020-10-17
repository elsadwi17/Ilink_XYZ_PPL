<?php
    $db_host="localhost";
    $db_user="root";
    $db_password="";
    $db_name="ilink";

    $con = new mysqli($db_host,$db_user,$db_password,$db_name);

    if($con->connect_error) {
        die('<script type:"text/javascript"> alert("Failed to connect to Database'.$con->connect_error.'") </script>');
    }
?>