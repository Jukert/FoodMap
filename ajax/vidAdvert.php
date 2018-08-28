<?php
require_once '../lib/rb.php';
require_once '../classes/connect.class.php';
$conn = new Connect();
$adverts_id = array();
$advert = R::find('adverts','type = ?', array(3));
foreach ($advert as $value) {
    $cat = R::load('catering',$value->catering_id);
    if ($cat->type == $_POST['type'] && $value->count<$value->max_count){
        $adverts_id[] = $cat->id;
    }
}
shuffle($adverts_id);
if (empty($adverts_id)){
    die(0);
}
$catering = R::load('catering',$adverts_id[0]);
$catering->count=$catering->count++;
R::store($catering);
?>

<div class="b">
    <div class="video">
        <iframe width="560" height="315" src="<?php
        foreach ($catering->ownAdvertsList as $item)
            echo $item->video;
        ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>

    <div class="advert__name-description">
        <div class="advert__name">
            <p><?php echo $catering->name; ?></p>
        </div>

        <div class="advert__description">
            <p><?php echo iconv_strlen($catering->description)>500 ? "&nbsp&nbsp&nbsp&nbsp".substr($catering->description,0,500-1)."..." : "&nbsp&nbsp&nbsp&nbsp".$catering->description;?></p>
        </div>
    </div>

</div>

<style>

    .b{
        width: 700px;
        height: 300px;
        display: flex !important;
        flex-direction: row;
        overflow: hidden;
    }

    .video{
        height: 100%;
        width: 60%;
    }

    .video>iframe{
        width: 100%;
        height: 100%;
    }

    .advert__name-description{
        height: 100%;
        width: 40%;
    }

    .advert__name{
        padding: 5px;
    }

    .advert__description{
        padding-left: 5px;
    }

    .advert__name>p{
        text-align: center;
    }

</style>