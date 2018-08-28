<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 09.04.2018
 * Time: 14:50
 */

return array(
    "title" => "<title>FoodMap Admin-panel</title>",
    "main"=> array(
        "menu" => "blocks/menu.php",
        "head" => "blocks/head.php",
        "scripts" => "blocks/scripts.php",
        "footer" => "blocks/footer.php",
        "lplaces" => "blocks/list_places.php",
        "add_places" => "blocks/add_places.php",
        "red_place" => "blocks/red_place.php",
        "preloader" => "blocks/preloader.php"
    ),
    "index" => array(
        "filters" => "blocks/index/filters.php"
    ),
    "top1" => array(
        "topblock" => "blocks/top1/topblock.php"
    ),
    "top10" => array(
        "top10" => "blocks/top10/top10.php"
    ),
    "account" => array(
        "select" => "blocks/panel_account/select.php",
        "reg" => "blocks/panel_account/registration.php",
        "auth" => "blocks/panel_account/authorization.php",
        "details" => "blocks/panel_account/details.php"
    )
);