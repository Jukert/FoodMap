<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 06.06.2018
 * Time: 17:07
 */

$secret = 'v463g6wf';
$m = $_POST['m'];
$oa = $_POST['oa'];
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

$o = $cat_id+""+$user_id;

echo md5("$m:$oa:$secret:$o");
