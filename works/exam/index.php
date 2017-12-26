<?php
session_start();
if(!isset($_SESSION["id"])){ //값이 빈거냐
    header("Location:/user/login1.html"); //비었으면 저 경로로 이동해라
    exit;
}
?>
hello~~~ <?=$_SESSION["id"]?>!!<br>
<a href="/user/logout.php">로그아웃</a>