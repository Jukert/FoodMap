<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 10.05.2018
 * Time: 17:34
 */

require_once '../../classes/upload_files.class.php';
$upload = new Upload('../../assets/temp/');
$upload->upload_files();