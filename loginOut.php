<?php
session_start();
session_destroy();
//header("location:index.php");
echo "<script>alert('注销成功!');location.href ='login.php';localStorage.clear();</script>";

?>