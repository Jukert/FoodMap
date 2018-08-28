<?php
require_once '../lib/rb.php';
require_once '../classes/connect.class.php';
$conn = new Connect();
$order = "";
$reit = array();
if ($_POST['condition'] != "null" && $_POST['condition'] != "rating")
    $order = " ORDER BY ".$_POST['condition'];


$limit = 10;
$offset = 10 * $_POST['p'];
if ($_POST['condition'] == "rating"){
    $cat = R::findAll('catering');

    foreach ($cat as $item) {
        $count = R::count('likes', 'catering_id = ?', array($item->id));
        $reit[$item->id] = $count;
    }
    arsort($reit);

    $i = 0;
    foreach ($reit as $item => $value) {
        if ($i<$offset) {
            $i++;
            continue;
        }
        $place = R::load('catering', $item);
        ?>
        <div class="place__wrapper">
            <div class="image-name">
                <div class="name-place">
                    <p><?php echo $place->name;?></p>
                </div>
                <div class="img__place">
                    <img src="<?php echo file_exists("../assets/restaurant/".$place->image) && iconv_strlen($place->image) != 0 ? "assets/restaurant/".$place->image : "assets/image/notImage.png";?>" alt="">
                </div>
            </div>

            <div class="description">
                <p><?php echo iconv_strlen($place->description)>500 ? "&nbsp&nbsp&nbsp&nbsp".substr($place->description,0,500-1)."..." : "&nbsp&nbsp&nbsp&nbsp".$place->description;?></p>
            </div>

            <div class="button-page">
                <?php
                $types = R::find('types','id = ?', array($place->type));
                foreach ($types as $type) {
                    ?>
                    <div class="type_place"><p>ТИП МЕСТА:<?php echo $type->name; ?></p></div>
                    <?php
                }
                ?>
                <a href="?page=pagePlace&p=<?php echo $place->id;?>"><p>ПЕРЕЙТИ НА СТРАНИЦУ</p></a>
            </div>
        </div>
        <?php
        $i++;
        if ($i>($limit+$offset)){
            break;
        }
    }
    ?>


<?php
}else {
    $places = R::find('catering', $order . " LIMIT $limit OFFSET $offset");
    foreach ($places as $place) {
        ?>
        <div class="place__wrapper">
            <div class="image-name">
                <div class="name-place">
                    <p><?php echo $place->name; ?></p>
                </div>
                <div class="img__place">
                    <img src="<?php echo file_exists("../assets/restaurant/" . $place->image) && iconv_strlen($place->image) != 0 ? "assets/restaurant/" . $place->image : "assets/image/notImage.png"; ?>"
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
}
?>
