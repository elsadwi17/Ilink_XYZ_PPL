<?php
    session_start();
    $user = 'xyz';
    $_SESSION['username'] = $user;
    $username = $_SESSION['username'];

    require_once('../../iLink/config/db_login.php');
    echo '<a href="/iLink/">iLink/'.$user.'</a>';
    echo '<dif class = "row">';
    $result = $con->query("SELECT link FROM link WHERE username='$username'");
    while($row = mysqli_fetch_array($result)) {
        echo '<div class="col-6"> <div class="bingkai-foto">
        <img src="/iLink/assets/img/logo.png" class="foto-link">
    </div> </div>';
    }
    echo '</div>';
?>