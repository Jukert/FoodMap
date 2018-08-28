<!DOCTYPE html>
<html lang="ru">
<?php
$content = include("config/contents.php");
require_once $content['main']['head'];
require_once $content['main']['scripts'];
echo $content['title'];
?>
<body>
<?php require_once $content['main']['preloader']; ?>
<div class="page" style="display: none">

    <?php require_once $content['main']['menu']; ?>
    <div class="food-map">
        <p>FOOD MAP</p>
    </div>

    <div class="finish-pay-advert">
        <?php
        require_once 'lib/rb.php';
        require_once 'classes/connect.class.php';
        $conn = new Connect();

        $secret = md5("77042"."v463g6wf");
        /*$cat = R::load('catering',1);

        $advert = R::dispense('adverts');
        $advert->=;
        $advert->=;*/
        ?>

        <script>
            location.href = 'http://www.free-kassa.ru/api.php?merchant_id=77042&s=<?php echo $secret?>=check_order_status&order_id=<?php echo $_POST["MERCHANT_ORDER_ID"]?>';
        </script>

        <div class="text-successfully">
            <p>Реклама удачно куплена!!!</p>
        </div>
    </div>

    <?php require_once $content['main']['footer']; ?>
    <?php require_once $content['main']['up']; ?>


</div>
</body>
</html>