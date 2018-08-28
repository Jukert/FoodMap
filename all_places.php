<!DOCTYPE html>
<html lang="ru">
<?php
$content = include("config/contents.php");
require_once $content['main']['head'];
echo $content['title'];
?>

<style>
    .footer{
        position: relative;
        top: 3%;
    }

    html,body,.page{
        height: 100%;
    }
</style>
<body>
<?php require_once $content['main']['preloader']; ?>
<div class="page" style="display: none">
    <?php require_once $content['main']['menu']; ?>
    <div class="food-map">
        <p>FOOD MAP</p>
    </div>

    <div class="text__list">
        <p>ВСЕ ДОСТУПНЫЕ МЕСТА</p>
        <div class="sort-buttons">
            <i class="material-icons sort rating">
                sort
            </i>
            <i class="material-icons sort list">
                list
            </i>
            <i class="material-icons sort abc">
                text_rotate_vertical
            </i>
        </div>
    </div>

    <div class="list__places"></div>


    <?php require_once $content['main']['footer']; ?>
</div>
<?php require_once $content['main']['up']; ?>
<?php require_once $content['main']['scripts']; ?>
</body>
</html>