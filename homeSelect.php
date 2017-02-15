<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/12/7
 * Time: 上午10:46
 */

$type = $_GET['type'];
if ($type == 1){
    $mysqli = new mysqli("localhost:3306","root","","kexun");
    if ($mysqli->connect_errno){
        die($mysqli->connect_error);
    }
    $mysqli->query("set names utf8");
    $sql = "SELECT * FROM kexun_01home LIMIT 0,9";
    $result = $mysqli->query($sql);
    $arr = $result->fetch_all(MYSQLI_ASSOC);
    $mysqli->close();
    echo json_encode($arr);
}

?>