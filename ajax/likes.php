<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 15.05.2018
 * Time: 23:02
 */

require_once '../lib/rb.php';
require_once '../classes/connect.class.php';
$conn = new Connect();

if (!isset($_SESSION))
    session_start();

$user = R::find('users', 'login = ?', array($_SESSION['user']));
$count = 0;
foreach ($user as $u) {
    $l = R::find('likes', 'users_id = ? && catering_id = ?', array($u->id, $_POST['place']));
    foreach ($l as $item) {
        $count++;
    }
    if ($count>=1)
        break;

    $user_id = R::load('users', $u->id);
    $place = R::load('catering', $_POST['place']);

    $like = R::dispense('likes');
    $user_id->ownLikesList[] = $like;
    $place->ownLikesList[] = $like;
    R::store($user_id);
    R::store($place);

    $favorite = R::dispense('favorite');
    $user_id->ownFavoriteList[] = $favorite;
    $place->ownFavoriteList[] = $favorite;
    R::store($user_id);
    R::store($place);
    break;
}