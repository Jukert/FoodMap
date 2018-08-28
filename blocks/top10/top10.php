
<div class="top10-rest">
    <div class="text__top10">
        <p>ТОП 10 РЕСТОРАНОВ</p>
    </div>
    <div class="block__restaurants">
        <?php
        require_once 'lib/rb.php';
        require_once 'classes/connect.class.php';
        $conn = new Connect();
        $reit = array();


        $cat = R::findAll('catering');

        foreach ($cat as $item) {
            $count = R::count('likes', 'catering_id = ?', array($item->id));
            $reit[$item->id] = $count;
        }
        arsort($reit);
        $i = 0;
        foreach ($reit as $item => $value) {
            $catering = R::load('catering', $item)
            ?>
            <div class="block__place">
                <a href="?page=pagePlace&p=<?php echo $catering->id;?>">
                    <div class="name__place">
                        <p><?php echo $catering->name;?></p>
                    </div>
                    <div class="image__place">
                        <img src="<?php echo file_exists("assets/restaurant/".$catering->image) && $catering->image != "" ? "assets/restaurant/".$catering->image : "assets/image/snotImage.png" ?>" alt="">
                    </div>
                </a>
            </div>
            <?php
            $i++;
            if ($i >= 10)
                break;
        }
        ?>
    </div>
</div>
