<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 15.05.2018
 * Time: 22:14
 */

require_once "../lib/rb.php";
require_once '../classes/connect.class.php';
$conn = new Connect();

$place = R::find('catering', 'id = ?', array($_POST['p']));
foreach ($place as $item) {
    ?>
    <?php echo $item->description;?>
<?php
}