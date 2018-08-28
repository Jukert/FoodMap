<!DOCTYPE html>
<html lang="ru">
<?php
$content = include("config/contents.php");
require_once $content['main']['head'];
echo $content['title'];
?>
<body>
<style>
    .footer{
        margin-top: 0;
        position: relative;
        top: 0;
    }

    html, body, .page {
        width: 100%;
        height: 100%;
    }
</style>
<?php require_once $content['main']['preloader']; ?>
    <div class="page" style="display: none">
        <?php require_once $content['main']['menu']; ?>
        <div class="food-map">
            <p>FOOD MAP</p>
        </div>

        <div class="result-search">
            <p>РЕЗУЛЬТАТЫ ПОИСКА</p>
        </div>

        <div id="map"></div>


        <?php require_once $content['main']['footer']; ?>


    </div>


<?php require_once $content['main']['scripts']; ?>
<script async defer
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBk0sMXiu3cg56u0bPnS5MirogPrFNYdM8&callback=initMap&libraries=geometry">
</script>
</body>
</html>