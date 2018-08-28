<?php
require_once '../lib/rb.php';
require_once '../classes/connect.class.php';

$con = new Connect();

$catering = R::load('catering',$_POST['id']);
$type = R::load('types',$catering->type);
$cost = R::load('cost',$catering->cost);
?>

<div class="menu__markers">
    <div class="exit">
        <img src="assets/image/btnclose.svg.png" alt="">
    </div>

    <div class="image__place-marker">
        <img src="<?php echo file_exists("../assets/restaurant/".$catering->image) && $catering->image != "" ? "assets/restaurant/".$catering->image : "assets/image/notImage.png"?>" alt="">
        <div class="type__place-marker">
            <p><?php echo $type->name?></p>
        </div>
    </div>

    <div class="name__place-marker">
        <p><?php echo $catering->name?></p>
    </div>

    <div class="average-cost__place-marker">
        <div class="text__cost">
            <p>Средняя стоимость:</p>
        </div>

        <div class="value__cost">
            <p><?php echo $cost->name;?></p>
        </div>
    </div>

    <div class="address__place-marker">
        <div class="text__address">
            <p>Адрес: </p>
        </div>

        <div class="value__address">
            <p><?php echo $catering->address?></p>
        </div>
    </div>


    <div class="description__place-marker">
        <div class="text__description">
            <p>Описание: </p>
        </div>

        <div class="block__description">
            <p><?php echo iconv_strlen($catering->description)>300 ? substr($catering->description,0,300).'...' : $catering->description;?></p>
        </div>
    </div>

    <div class="button__page-marker">
        <a href="?page=pagePlace&p=<?php echo $catering->id;?>">
            <div class="btn__object">
                <p>Страничка заведения</p>
            </div>
        </a>
    </div>



    <div class="phone-time__marker">
        <div class="phone__marker">
            <img src="assets/image/phone.png" alt="">
            <p><?php echo $catering->phone?></p>
        </div>

        <div class="time__marker">
            <p>Время работы : <?php echo $catering->worktime?></p>
        </div>
    </div>
</div>