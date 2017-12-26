<?php
$id=$_GET["id"];
$pwd=$_GET["pwd"];

session_start();
if($id=="test"){
    if($pwd=="ppp"){
    $_SESSION["id"]=$id;
    header("Location:/index.php");
    }else{
        echo "비밀번호 확인~";
    } 
}else{
    echo "아이디 틀림~";
}       
?>

