<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 12.05.2018
 * Time: 15:50
 */

require_once '../lib/rb.php';
require_once '../classes/connect.class.php';
$conn = new Connect();

$places = R::find('catering', 'type = ? AND cost = ?', array($_POST['type'], $_POST['cost']));

$data = array();
$i=0;
foreach ($places as $item) {
    $data[$i]['id'] = $item->id;
    $data[$i]['name'] = $item->name;
    $data[$i]['type'] = $item->type;
    $data[$i]['cost'] = $item->cost;
    $data[$i]['lat'] = $item->lat;
    $data[$i]['lng'] = $item->lng;
    $data[$i]['description'] = $item->description;
    $data[$i]['image'] = $item->image;
    $data[$i]['avarage_cost'] = $item->avarage_cost;
    $data[$i]['address'] = $item->address;
    $data[$i]['phone'] = $item->phone;
    $data[$i]['worktime'] = $item->worktime;
    $i++;
}

//format the data
$formattedData = json_encode($data,JSON_UNESCAPED_UNICODE );
echo($formattedData);
