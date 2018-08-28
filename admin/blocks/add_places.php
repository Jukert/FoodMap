<div class="food-map">
    <p>Добавление места</p>
</div>
<div class="content">

    <div class="panel__add-catering">
        <form action="php/addCatering.php" method="post">
            <p>1. НАЗВАНИЕ</p>
            <input type="text" name="name" placeholder="НАЗВАНИЕ МЕСТА">
            <p>2. ТИП</p>
            <select name="type" id="">
                <?php
                require_once '../lib/rb.php';
                require_once '../classes/connect.class.php';
                $con = new Connect();
                $type = R::findAll('types');
                foreach ($type as $value) {
                    ?>
                    <option value="<?php echo $value->id;?>"><?php echo $value->name;?></option>
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
                    <option value="<?php echo $value->id;?>"><?php echo $value->name;?></option>
                    <?php
                }
                ?>
            </select>
            <p>4. КООРДИНАТЫ</p>
            <input type="text" id="lat" name="lat" placeholder="LATITUDE(ШИРОТА)">
            <input type="text" id="lng" name="lng" placeholder="LONGITUDE(ДОЛГОТА)">
            <button class="check-marker">Проверить</button>
            <div class="block-map">
                <div id="map"></div>
            </div>
            <p>5. ОПИСАНИЕ МЕСТА</p>
            <textarea name="description" id="" cols="30" rows="30" placeholder=""></textarea>
            <p>6. ИЗОБРАЖЕНИЕ</p>
            <div id="drop-area">
                <input type="file" title="Click to add Files">
            </div>
            <div class="uploadsImg">

            </div>
            <input type="text" id="src" value="" name="image" hidden>
            <p>7. СРЕДНЯЯ СТОИМОСТЬ</p>
            <input type="number" min="0" max="1000" name="avarage_cost" placeholder="только цифры в бел. руб.">
            <p>8. АДРЕС</p>
            <input type="text" name="address" placeholder="АДРЕС">
            <p>9. ТЕЛЕФОН</p>
            <input type="tel" name="phone" placeholder="ТЕЛЕФОН (375445554433)">
            <p>9. Время работы</p>
            <input type="text" name="worktime" placeholder="ВРЕМЯ РАБОТЫ (9:00 - 18:00)">
            <div class="button__add">
                <button>ДОБАВИТЬ НА САЙТ</button>
            </div>
        </form>
    </div>

</div>
