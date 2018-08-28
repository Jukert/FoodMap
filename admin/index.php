<?php
session_start();
if (isset($_SESSION['admin'])) {
    if (isset($_GET)) {
        if (isset($_GET['admin'])) {
            if (file_exists($_GET['admin'] . ".php")) {
                require_once $_GET['admin'] . ".php";
            } else
                require_once "main.php";
        } else
            require_once "main.php";
    } else {
        require_once "main.php";
    }
}else{
    require_once "auth.php";
}