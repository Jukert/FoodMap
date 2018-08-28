<div class="food-map">
    <p>Редактирование мест</p>
</div>
<div class="content">

    <div class="panel__add-catering">
        <?php
        $catering = R::findAll('catering');
        foreach ($catering as $value) {
            ?>
            <div class="block__red--foodplace">
                <a href="?admin=red&place=<?php echo $value->id?>">
                    <div class="image__foodplace">
                        <img src="../assets/restaurant/<?php echo $value->image != '' || file_exists($value->image) ? $value->image : 'assets/image/notImage.png';?>" alt="">
                    </div>

                    <div class="block-text__foodplace">
                        <div class="content__foodplace">
                            <p><?php echo $value->name;?></p>
                        </div>

                        <div class="description__foodplace">
                            <p><?php echo iconv_strlen($value->description)>650 ? "&nbsp&nbsp&nbsp&nbsp".substr($value->description,0,1000-1)."..." : "&nbsp&nbsp&nbsp&nbsp".$value->description;?></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php
        }
        ?>
    </div>

</div>