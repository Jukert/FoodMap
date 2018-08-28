<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 06.06.2018
 * Time: 15:54
 */

require_once '../lib/rb.php';
require_once '../classes/connect.class.php';

$conn = new Connect();

$cat = R::find('catering', 'name LIKE ? LIMIT 1', array("%".$_POST['name']."%"));
$data = array();
foreach ($cat as $value){
    $data[0]['id'] = $value->id;
    $data[0]['name'] = $value->name;
    break;
}

//format the data
$formattedData = json_encode($data,JSON_UNESCAPED_UNICODE );
echo($formattedData);
