<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/12/7
 * Time: 上午10:46
 */

$mysqli = new mysqli("localhost:3306","root","","kexun");
if ($mysqli->connect_errno){
    die($mysqli->connect_error);
}
$mysqli->query("set names utf8");
$sql = "SELECT * FROM kexun_02guandian ORDER BY id DESC LIMIT 1,20";
$result = $mysqli->query($sql);
$arr = $result->fetch_all(MYSQLI_ASSOC);
$mysqli->close();
echo json_encode($arr);
