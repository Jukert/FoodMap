<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 06.06.2018
 * Time: 17:21
 */
$o = null;
require_once '../lib/rb.php';
require_once '../classes/connect.class.php';
$conn = new Connect();

$cat = R::find('catering','name = ?', array($_POST['name']));
if (!isset($_SESSION))
    session_start();
$user = R::find('users', 'login = ?', array($_SESSION['user']));

$cat_id = null;
foreach ($cat as $value){
    $cat_id = $value->id;
    break;
}

$user_id = null;
foreach ($user as $value) {
    $user_id = $value->id;
}

$o = $cat_id+"_"+$user_id;
echo $o;