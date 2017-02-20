<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/12/7
 * Time: 上午9:47
 */

$title =$_GET["title"];
$img = $_GET["img"];
$content = $_GET["content"];
$actor = $_GET["actor"];
$value = $_GET["value"];
//echo $value;
$mysqli = new mysqli("localhost:3306","root","","kexun");
if ($mysqli->connect_errno){
    die($mysqli->connect_error);
}
$mysqli->query("set names utf8");
if($value == 1 && $value == 2 && $value == 3 && $value == 4 && $value == 5){
    $sql = "INSERT INTO kexun_02guandian VALUES(NULL,'{$img}','{$title}','{$content}','2017-02-14','{$actor}')";
}
else if($value == 6 && $value == 7 && $value == 8 && $value == 9 && $value == 10){
    $sql = "INSERT INTO kexun_03chuangtou VALUES(NULL,'{$img}','{$title}','{$content}','2017-02-14','{$actor}')";
}
else if($value == 11 && $value == 12 && $value == 13){
    $sql = "INSERT INTO kexun_04shangye VALUES(NULL,'{$img}','{$title}','{$content}','2017-02-14','{$actor}')";
}
else{
    $sql = "INSERT INTO kexun_05zhike VALUES(NULL,'{$img}','{$title}','{$content}','2017-02-14','{$actor}')";
}
//$sql = "INSERT INTO kexun_02guandian VALUES(NULL,'{$img}','{$title}','{$content}','2017-02-14','{$actor}')";
$result = $mysqli->query($sql);
if ($result){
    echo json_encode(["state"=>1]);
}else{
    echo json_encode(["state"=>0]);
}
$mysqli->close();
