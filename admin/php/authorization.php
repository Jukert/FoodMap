<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 25.04.2018
 * Time: 20:44
 */

require_once "../../lib/rb.php";
require_once "../../classes/connect.class.php";
$conn = new Connect();

require_once "../../classes/auth.class.php";
$auth = new Auth();

if($auth->valid_admin($_POST['login'],$_POST['password'])){
    session_start();
    require_once "../../classes/account.class.php";
    $acc = new Account();
    $acc->addSession("admin","admin");
    header("Location: /admin/index.php");
} else{
    $ERROR = array(
        "Неправильно введён логин или пароль администратора"
    );
    require_once "../error.php";
}