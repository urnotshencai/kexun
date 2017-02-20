<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/12/5
 * Time: 上午9:19
 */
$userName = $_POST["userName"];
$passWord = $_POST["passWord"];
$type = $_POST["type"];
if ($type == 0){
    $passWordAgain = $_POST["passWordAgain"];
    $email = $_POST["email"];
}
if ($type == 0){
    //注册模块
    $mysqli = new mysqli("localhost:3306","root","","kexun");
    if ($mysqli->connect_errno){
        die($mysqli->connect_error);
    }
    $mysqli->query("set names utf8");
    $sql = "SELECT userName FROM user1";
    $result = $mysqli->query($sql);
    $arr = $result->fetch_all(MYSQLI_ASSOC);
    for ($i=0;$i<count($arr);$i++){
        if ($arr[$i]["userName"]== $userName){
            $resultArr = ["error"=>"用户名重复","state"=>4];
            echo json_encode($resultArr);
            die();//die之后的所有语句都不会执行了
        }
    }
    $sql2 = "INSERT INTO user1 VALUES(NULL,'{$userName}','{$passWord}','{$email}') ";
    $result = $mysqli->query($sql2);
    $mysqli->close();
    if ($result){
        $resultArr = ["state"=>3];
        echo json_encode($resultArr);
    }else{
        $resultArr = ["state"=>4];
        echo json_encode($resultArr);
    }
}else{
    //登录模块
    $mysqli = new  mysqli("localhost:3306","root","","kexun");
    if ($mysqli->connect_errno){
        die($mysqli->connect_error);
    }
    $mysqli->query("set name utf8");
    $sql = "SELECT userName,passWord FROM user1";
    $result = $mysqli->query($sql);
    $arr = $result->fetch_all(MYSQLI_ASSOC);
    $isBool = false;
    $name = null;
    for ($i=0;$i<count($arr);$i++){
        if ($arr[$i]["userName"] == $userName && $arr[$i]["passWord"]== $passWord){
            $isBool = true;
            break;
        }
    }
    if ($isBool){
        $resultArr = ["state"=>1];
        echo json_encode($resultArr);
    }else{
        $resultArr = ["error"=>"登录失败","state"=>0];
        echo json_encode($resultArr);
    }
}















