<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 13.04.2018
 * Time: 15:50
 */
require_once "../lib/rb.php";
require_once "../classes/connect.class.php";
require_once "../classes/registration.class.php";

$conect = new Connect();
$reg = new Registration();

if ($_POST['password'] == $_POST['repeat_pass']) {
    $reg->registration_users();
    header("Location: /");
}