<?php
require_once 'lib/rb.php';
require_once 'classes/connect.class.php';
$conn = new Connect();
$max = 0;
$id = 0;
$cat = R::findAll('catering');
foreach ($cat as $value) {
    $likes = R::count('likes', 'catering_id = ?', array($value->id));
    if ($max < $likes){
        $max = $likes;
        $id = $value->id;
    }
}

$top = R::load('catering', $id);
    ?>

    <div class="block-inf">

        <div class="name-restaurant">
            <p><?php echo $top->name;?></p>
        </div>

        <div class="image-restaurant">
            <img src="<?php echo file_exists("assets/restaurant/".$top->image) && $top->image != "" ? "assets/restaurant/".$top->image : "assets/image/notImage.png" ?>" alt="">
        </div>

        <div class="description-information">
            <p><?php echo iconv_strlen($top->description)>500 ? "&nbsp&nbsp&nbsp&nbsp".substr($top->description,0,500-1).'...' : "&nbsp&nbsp&nbsp&nbsp".$top->description;?></p>
        </div>

        <div class="button-restaurant">
            <div class="b-r">
                <p><a href="?page=pagePlace&p=<?php echo $top->id; ?>">ПЕРЕЙТИ НА СТРАНИЦУ РЕСТОРАНА</a></p>
            </div>
        </div>
    </div>
