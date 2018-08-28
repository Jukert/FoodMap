<?php
if (!isset($_SESSION)) {
    session_start();
}
    if (!isset($_SESSION['admin']))
        die("Авторизируйтесь");
?>
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
    <?php require_once $content['main']['add_places']; ?>

</div>
<?php require_once $content['main']['scripts'];?>
<script async defer
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBk0sMXiu3cg56u0bPnS5MirogPrFNYdM8&callback=initMap&libraries=geometry">
</script>
</body>
</html>
