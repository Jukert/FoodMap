
<div class="food-map">
    <p>Добавление места</p>
</div>
<div class="content">
    <?php
    require_once "../lib/rb.php";
    require_once "../classes/connect.class.php";
    $con = new Connect();
    $place = R::find('catering','id = ?', array($_GET['place']));
    foreach ($place as $item){
    ?>
    <div class="panel__add-catering">
        <form action="php/redCatering.php" method="post">
            <input type="text" name="id" value="<?php echo $_GET['place']; ?>" hidden>
            <p>1. НАЗВАНИЕ</p>
            <input type="text" name="name" placeholder="НАЗВАНИЕ МЕСТА" value="<?php echo $item->name; ?>">
            <p>2. ТИП</p>
            <select name="type" id="">
                <?php
                $type = R::findAll('types');
                foreach ($type as $value) {
                    ?>
                    <option value="<?php echo $value->id; ?>" <?php echo $value->id == $item->type ? " selected" : ""; ?>><?php echo $value->name; ?></option>
                    <?php
                }
                ?>
            </select>
            <p>3. СТОИМОСТЬ</p>
            <select name="cost" id="">
                <?php
                $type = R::findAll('cost');
                foreach ($type as $value) {
                    ?>
                    <option value="<?php echo $value->id; ?>" <?php echo $value->id == $item->cost ? " selected" : ""; ?>><?php echo $value->name; ?></option>
                    <?php
                }
                ?>
            </select>
            <p>4. КООРДИНАТЫ</p>
            <input type="text" id="lat" name="lat" placeholder="LATITUDE(ШИРОТА)" value="<?php echo $item->lat; ?>">
            <input type="text" id="lng" name="lng" placeholder="LONGITUDE(ДОЛГОТА)" value="<?php echo $item->lng; ?>">
            <p>5. ОПИСАНИЕ МЕСТА</p>
            <textarea name="description" cols="30" rows="30" placeholder=""><?php echo $item->description; ?></textarea>
            <p>6. ИЗОБРАЖЕНИЕ</p>
            <div class="uploadsImg">
                <img src="../../assets/restaurant/<?php echo $item->image;?>">
            </div>
            <div class="x">x</div>
            <div id="drop-area" style="display: none;">
                <input type="file" title="Click to add Files">
            </div>
            <input type="text" id="src" value="" name="image" hidden>
            <p>7. СРЕДНЯЯ СТОИМОСТЬ</p>
            <input type="number" min="0" max="1000" name="avarage_cost" placeholder="только цифры в бел. руб." value="<?php echo $item->avarage_cost; ?>">
            <p>8. АДРЕС</p>
            <input type="text" name="address" placeholder="АДРЕС" value="<?php echo $item->address; ?>">
            <p>9. ТЕЛЕФОН</p>
            <input type="tel" name="phone" placeholder="ТЕЛЕФОН (375445554433)" value="<?php echo $item->phone; ?>">
            <p>9. Время работы</p>
            <input type="text" name="worktime" placeholder="ВРЕМЯ РАБОТЫ (9:00 - 18:00)" value="<?php echo $item->worktime; ?>">
            <?php
            }
            ?>
            <div class="button__add">
                <button>Изменить</button>
            </div>
        </form>
    </div>

</div>
