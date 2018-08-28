<!DOCTYPE html>
<html lang="ru">
<?php
$content = include("config/contents.php");
require_once $content['main']['head'];
echo $content['title'];
?>
<style>
    .footer{
        margin-top: 13.9%;
    }
</style>
<body>
<?php require_once $content['main']['preloader']; ?>
<div class="page" style="display: none">
    <?php require_once $content['main']['menu']; ?>
    <div class="food-map">
        <p>FOOD MAP</p>
    </div>

    <?php
    if (!isset($_GET['select'])) {
        require_once "classes/account.class.php";
        if (!isset($_SESSION))
            session_start();
        $account = new Account();
        if (!$account->checkUserAuth()) {
            require_once $content['account']['select'];
        }else{
            require_once $content['account']['details'];
        }
    }else{
        require_once $content['account'][$_GET['select']];
    }
    ?>

    <?php require_once $content['main']['footer']; ?>
</div>
<?php require_once $content['main']['up']; ?>
<?php require_once $content['main']['scripts']; ?>
</body>
</html>