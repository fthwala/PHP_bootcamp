<?php
    session_start(); 
    include 'dbh_siguo.php';

    $first = $_POST['first'];
    $last = $_POST['last'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

   $sql = "INSERT INTO user (first, last, uid, pwd)
   VALUES ('$first', '$last', '$uid', '$pwd')";
   $result = $conn->query($sql);

   header("Location: user_login.php");
?>
