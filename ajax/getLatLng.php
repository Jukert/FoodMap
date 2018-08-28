<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 03.06.2018
 * Time: 20:46
 */
require_once '../lib/rb.php';
require_once '../classes/connect.class.php';
$conn = new Connect();

$cat = R::load('catering',$_POST['p']);

$data = array(
    0 => $cat->lat,
    1 => $cat->lng,
    2 => $cat->cost
);

$formattedData = json_encode($data,JSON_UNESCAPED_UNICODE );
echo($formattedData);
