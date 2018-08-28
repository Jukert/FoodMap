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
        <?php
        require_once "lib/rb.php";
        require_once 'classes/connect.class.php';
        $conn = new Connect();

        $place = R::find('catering', 'id = ?', array($_GET['p']));
        foreach ($place as $item) {
            ?>

            <div class="text-top">
                <p><?php echo $item->name?></p>
            </div>
            <div class="block-inf">
                <div class="image-restaurant">
                    <img src="<?php echo file_exists("assets/restaurant/".$item->image) && $item->image != "" ? "assets/restaurant/".$item->image : "assets/image/notImage.png" ?>" alt="">
                </div>

                <div class="description-information">
                    <p><?php echo iconv_strlen($item->description)>500 ? "&nbsp&nbsp&nbsp&nbsp".substr($item->description,0,500-1)."<span class='still'> Ещё...</span>..." : "&nbsp&nbsp&nbsp&nbsp".$item->description;?></p>
                    <?php
                    if (!isset($_SESSION))
                        session_start();
                    if (isset($_SESSION['user'])) {
                        $heart = null;
                    $user = R::find('users', 'login = ?', array($_SESSION['user']));
                    foreach ($user as $u) {
                        $like = R::find('likes', 'users_id = ? && catering_id = ?', array($u->id, $_GET['p']));
                        foreach ($like as $item) {
                            $heart = 'active_h';
                        }
                    }
                            ?>
                            <span class="heart <?php echo $heart; ?>">&#10084;</span>
                            <?php

                    }
                    ?>
                </div>
                <?php
                }
                ?>

                <div class="detailing-information">

                    <div class="text-information">

                        <div class="detailed">
                            <p>Адрес:</p>
                            <p>ул.Пушкино д. Калотушкино</p>
                        </div>

                        <div class="line"></div>

                        <div class="detailed">
                            <p>Тип заведения:</p>
                            <p>Фастфуд</p>
                        </div>

                        <div class="line"></div>

                        <div class="detailed">
                            <p>Телефон:</p>
                            <p>8-800-555-35-35</p>
                        </div>

                        <div class="line"></div>

                        <div class="detailed">
                            <p>Время работы:</p>
                            <p>9:00-19:00</p>
                        </div>
                    </div>

                    <div id="map-place"></div>
                </div>


                <div class="cost-category">

                    <div class="text-cost">
                        <p>Ценовая категория</p>
                    </div>

                    <div class="progress-bar">

                        <div class="color-progress">

                        </div>
                    </div>

                    <div class="point-cost">
                        <div class="block-cost">
                            <img src="assets/image/triangle.png" alt="">
                            <p>Средняя стоимость</p>
                        </div>

                    </div>

                </div>

            </div>


        <?php require_once $content['main']['footer']; ?>
    </div>
<?php require_once $content['main']['up']; ?>
<?php require_once $content['main']['scripts']; ?>
<script async defer
    src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBk0sMXiu3cg56u0bPnS5MirogPrFNYdM8&callback=detailsMap&libraries=geometry">
</script>
</body>
</html>