<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 13.04.2018
 * Time: 18:40
 */

require_once "../lib/rb.php";
require_once "../classes/connect.class.php";
$conn = new Connect();

require_once "../classes/auth.class.php";
$auth = new Auth();

if($auth->valid($_POST['login'],$_POST['password'])){
    session_start();
    require_once "../classes/account.class.php";
    $acc = new Account();
    $acc->addSession("user",$_POST['login']);
    echo true;
}

