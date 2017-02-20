<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/2/13
 * Time: 下午5:32
 */
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/12/7
 * Time: 上午9:44
 */
header('Access-Control-Allow-Origin:*');
$type = $_GET["type"];
switch ($type){

    case 1:
        require_once "01select.php";
        break;
    case 2:
        require_once "02select.php";
        break;
    default:
        break;
}


