<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 08.05.2018
 * Time: 16:23
 */

require_once '../lib/rb.php';
require_once '../classes/connect.class.php';
$conn = new Connect();

session_start();

$user = R::find('users','login = ?', array($_SESSION['user']));

foreach ($user as $item) {
    echo $item->$_POST['class'];
}
