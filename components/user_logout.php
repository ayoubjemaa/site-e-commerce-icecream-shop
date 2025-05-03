<?php
    include 'connect.php';
    setcookie('user_id','', time() -1,'/');
    header('Location: ../home.php');
    exit();
?>
