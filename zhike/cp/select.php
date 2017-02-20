<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/2/14
 * Time: 上午10:30
 */


    $mysqli = new mysqli("localhost:3306","root","","kexun");
    if ($mysqli->connect_errno){
        die($mysqli->connect_error);
    }
    $mysqli->query("set names utf8");
    $sql = "SELECT * FROM kexun_05zhike ORDER BY id DESC LIMIT 5,9";
    $result = $mysqli->query($sql);
    $arr = $result->fetch_all(MYSQLI_ASSOC);
    $mysqli->close();
    echo json_encode($arr);
