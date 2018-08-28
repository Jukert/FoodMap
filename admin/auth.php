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
        <p>АДМИН-ПАНЕЛЬ</p>
    </div>
    <div class="content">
        <?php require_once $content['account']['auth']; ?>
    </div>
</div>
<?php require_once $content['main']['scripts'];?>
</body>
</html>