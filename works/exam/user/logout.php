<?php
session_start();
session_destroy(); //id값 없애기.
header("Location:/index.php");
?>