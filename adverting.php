<!DOCTYPE html>
<html lang="ru">
<?php
$content = include("config/contents.php");
require_once $content['main']['head'];
echo $content['title'];
?>
<body>
<style>
    .footer {
        position: absolute!important;
        top: 85%!important;
    }
</style>
<?php require_once $content['main']['preloader']; ?>
<div class="page" style="display: none">

    <?php require_once $content['main']['menu']; ?>
    <div class="food-map">
        <p>ЗАКАЗ РЕКЛАМЫ</p>
    </div>

    <div class="adverting-form">

        <form action="">
            <div class="catering-choose">
                <p>1. НАЗВАНИЕ МЕСТА</p>
                <input type="text" name="catering" class="catering-search">
                <div class="name-searcher">
                    <a href="" target="_blank"><p></p></a>
                </div>
            </div>

            <div class="advert-type">
                <p>2. Выбор типа рекламы</p>
                <select name="type" id="">

                    <option value="2">
                        Лайт (lite)
                    </option>
                    <option value="1">
                        Медиум (Medium)
                    </option>
                    <option value="3">
                        Максимум (Maximum)
                    </option>
                </select>
            </div>
            <?php
            if (!isset($_SESSION))
                session_start();
            ?>
            <input type="text" name="user" value="<?php echo $_SESSION['user'] ?>" hidden>

            <div class="count-views">
                <p>3. Количество показов</p>
                <input type="number" name="count">
            </div>

            <div class="url-video">
                <p>4. Ссылка на видео</p>
                <input type="text" name="video">
            </div>

            <button class="payAdvert">Оплатить</button>
        </form>

    </div>

    <?php require_once $content['main']['footer']; ?>
    <?php require_once $content['main']['up']; ?>
    <?php require_once $content['main']['scripts']; ?>
</body>
</html>