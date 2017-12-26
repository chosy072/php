<html>
<head>
    <meta charset="utf8"> 
    <title>test</title>
</head>
<body>
<?php
    $bl = true; //var 생략하고 $만.
    echo $bl;
    echo "<br>";
    $num =123;
    echo $num+123*2;
    $bl=123;
    $arr = [1,2,3,4];
    echo "<br>";
   foreach($arr as $key=> $value){
        echo $key;
        echo ":";
        echo $value;
        echo "<br>";
   }
   $arr = array("1번마"=>"다크호스","2번마"=>"블루","3번마"=>"허리케인","허허허"=>false);
   foreach($arr as $key=> $value){
    echo $key;
    echo ":";
    echo $value;
    echo "<br>";
    }
?>
</body>
</html>