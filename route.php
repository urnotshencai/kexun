<?php
$type = $_GET["type"];
switch ($type){

    case 1:
        require_once "select1.php";
        break;
    case 2:
        require_once "select2.php";
        break;
    case 3:
        require_once "select3.php";
        break;
    case 4:
        require_once "select4.php";
        break;
    default:
        break;
}


