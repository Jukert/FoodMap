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
        <p>ИЗБРАННОЕ</p>
    </div>

    <?php
    require_once 'lib/rb.php';
    require_once 'classes/connect.class.php';
    $conn = new Connect();
    if (!isset($_SESSION))
        session_start();

    $user_l = R::find('users','login = ?', array($_SESSION['user']));
    $user_id = null;
    foreach ($user_l as $item) {
        $user_id = $item->id;
        break;
    }
    $user = R::load('users', $user_id);
    ?>
    <div class="block-inf">
        <?php
        foreach ($user->ownFavoriteList as $value) {
            $place = R::load('catering',$value->catering_id);
                ?>
                <div class="place__wrapper">
                    <div class="image-name">
                        <div class="name-place">
                            <p><?php echo $place->name; ?></p>
                        </div>
                        <div class="img__place">
                            <img src="<?php echo file_exists("assets/restaurant/" . $place->image) && iconv_strlen($place->image) != 0 ? "assets/restaurant/" . $place->image : "assets/image/notImage.png"; ?>"
                                 alt="">
                        </div>
                    </div>

                    <div class="description">
                        <p><?php echo iconv_strlen($place->description) > 500 ? "&nbsp&nbsp&nbsp&nbsp" . substr($place->description, 0, 500 - 1) . "..." : "&nbsp&nbsp&nbsp&nbsp" . $place->description; ?></p>
                    </div>

                    <div class="button-page">
                        <?php
                        $types = R::find('types', 'id = ?', array($place->type));
                        foreach ($types as $type) {
                            ?>
                            <div class="type_place"><p>ТИП МЕСТА:<?php echo $type->name; ?></p></div>
                            <?php
                        }
                        ?>
                        <a href="?page=pagePlace&p=<?php echo $place->id; ?>"><p>ПЕРЕЙТИ НА СТРАНИЦУ</p></a>
                    </div>
                </div>
                <?php
        }
?>
    </div>

    <?php require_once $content['main']['footer']; ?>
</div>
<?php require_once $content['main']['up']; ?>
<?php require_once $content['main']['scripts']; ?>
</body>
</html>