
<div class="line-menu">
    <div class="menu">
        <ul>
            <li><img style="width: 20px;" src="assets/image/ml.png" alt=""></li>
            <a href="/"><li>ГЛАВНАЯ</li></a>
            <a href="?page=top1"><li>ТОП-1 МЕСЯЦА</li></a>
            <a href="?page=top10"><li>ТОП 10</li></a>
            <a href="?page=callback"><li>ОБРАТНАЯ СВЯЗЬ</li></a>
            <a href="?page=account"><li>АККАУНТ</li></a>
            <a href="?page=all_places"><li>СПИСОК МЕСТ</li></a>
            <li><img style="width: 20px;" src="assets/image/vl.png" alt=""></li>
        </ul>
    </div>
    <?php
    if (!isset($_SESSION))
        session_start();
    if (isset($_SESSION['user'])) {
        ?>
        <div class="favorite" style="position: relative;top: 0;left: 25%;font-size: 22px;"><a href="?page=favorite">&#9733;</a></div>
        <?php
    }
    ?>
</div>