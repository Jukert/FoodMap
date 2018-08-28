<?php
require_once '../lib/rb.php';
require_once '../classes/connect.class.php';
$conn = new Connect();
$adverts_id = array();
$advert = R::find('adverts','type = ?', array(2));
foreach ($advert as $value) {
    $cat = R::load('catering',$value->catering_id);
    if ($cat->type == $_POST['type'] && $value->count<$value->max_count){
        $adverts_id[] = $cat->id;
    }
}
shuffle($adverts_id);

$catering = R::load('catering',$adverts_id[0]);
if (empty($catering)){
    die(0);
}
$catering->count=$catering->count++;
R::store($catering);
?>

<div class="b">
    <a href="?page=pagePlace&p=<?php echo $catering->id?>">
        <div class="advert__name-description">
            <div class="advert__name">
                <p><?php echo $catering->name; ?></p>
            </div>

            <div class="advert__description">
                <p><?php echo iconv_strlen($catering->description)>500 ? "&nbsp&nbsp&nbsp&nbsp".substr($catering->description,0,500-1)."..." : "&nbsp&nbsp&nbsp&nbsp".$catering->description;?></p>
            </div>
        </div>
    </a>

</div>

<style>

    .b{
        width: 400px;
        display: flex !important;
        flex-direction: row;
        overflow: hidden;
        background: linear-gradient(to bottom left, #7d7d7d33, #fff);
        border-radius: 53px 10px;
    }
    .b>a{
        text-decoration: none;
    }
    .advert__name-description{
        height: 100%;
        width: 100%;
    }

    .advert__name{
        padding: 5px;
    }

    .advert__description{
        padding-left: 5px;
    }

    .advert__description>p{
        font-size: 12px;
        text-decoration: none;
        font-family: inherit;

        padding: 5px;
        color: black;
        text-align: justify;
    }

    .advert__name>p{
        text-align: center;
        text-decoration: none;
        color: black;
    }

</style>