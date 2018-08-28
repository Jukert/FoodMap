<?php
if (isset($_GET)){
    if (isset($_GET['page'])){
        if (file_exists($_GET['page'].".php")){
            require_once $_GET['page'].".php";
        }else
            require_once "main.php";
    }else
        require_once "main.php";
}else{
    require_once "main.php";
}

