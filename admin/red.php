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
require_once "../lib/rb.php";
require_once "../classes/connect.class.php";
$conn = new Connect();
$content = include("config/contents.php");
require_once $content['main']['head'];
echo $content['title'];
?>
<body>
<?php require_once $content['main']['preloader']; ?>
<div class="page" style="display: none">
    <?php require_once $content['main']['menu']; ?>
    <?php
    if (!isset($_GET['place'])) {
        ?>
        <?php require_once $content['main']['lplaces']; ?>

        <?php
    }
    if (isset($_GET['place'])){
    require_once $content['main']['red_place'];
    }
    ?>
</div>
<?php require_once $content['main']['scripts'];?>
</body>
</html>
