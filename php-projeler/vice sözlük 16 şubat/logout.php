<?php
session_start();
session_destroy();
unset($_SESSION['username']);
$_SESSION['message']="Çıkış yaptınız";
header("location:index.php");
?>