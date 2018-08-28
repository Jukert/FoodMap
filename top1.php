<!DOCTYPE html>
<html lang="ru">
<?php
$content = include("config/contents.php");
require_once $content['main']['head'];
echo $content['title'];
?>
<body>
<?php require_once $content['main']['preloader']; ?>
    <div class="page" style="display: none">

        <?php require_once $content['main']['menu']; ?>
        <div class="food-map">
            <p>FOOD MAP</p>
        </div>

        <div class="text-top">
            <p>ТОП-1 МЕСЯЦА</p>
        </div>
        <?php require_once $content['top1']['topblock']; ?>
        <?php require_once $content['main']['footer']; ?>
    </div>
<?php require_once $content['main']['up']; ?>
<?php require_once $content['main']['scripts']; ?>
</body>
</html>