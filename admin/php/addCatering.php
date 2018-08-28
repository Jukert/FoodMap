<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 26.04.2018
 * Time: 1:02
 */

require_once "../../lib/rb.php";
require_once "../../classes/connect.class.php";
$con = new Connect();

$cat = R::dispense('catering');
$cat->name = $_POST['name'];
$cat->type = $_POST['type'];
$cat->cost = $_POST['cost'];
$cat->lat = $_POST['lat'];
$cat->lng = $_POST['lng'];
$cat->description = $_POST['description'];
$cat->image = $_POST['image'];
$cat->avarage_cost = $_POST['avarage_cost'];
$cat->address = $_POST['address'];
$cat->phone = $_POST['phone'];
$cat->worktime = $_POST['worktime'];
R::store($cat);


if (file_exists('../../assets/temp/'.$_POST['image'])){
    rename('../../assets/temp/'.$_POST['image'],'../../assets/restaurant/'.$_POST['image']);
}

$cater = R::find('catering');
$data = array();
$i=0;
foreach ($cater as $item) {
    $data[$i]['name'] = $item->name;
    $data[$i]['type'] = $item->type;
    $data[$i]['cost'] = $item->cost;
    $data[$i]['lat'] = $item->lat;
    $data[$i]['lng'] = $item->lng;
    $data[$i]['description'] = $item->description;
    $data[$i]['image'] = $item->image;
    $i++;
}




//format the data
$formattedData = json_encode($data,JSON_UNESCAPED_UNICODE );

//set the filename
$filename = '../json/coordinate.json';

//open or create the file
$handle = fopen($filename,'w');

//write the data into the file
fwrite($handle,$formattedData);

//close the file
fclose($handle);

header("Location: /admin");

