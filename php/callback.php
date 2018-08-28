<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 13.06.2018
 * Time: 15:09
 */

$to  = "foodmap.minsk@gmail.com" ;

$subject = "Callback";

$message = "
<html>
    <head>
        <title></title>
    </head>
    <body>
        <p>".$_POST['callback']."</p>
    </body>
</html>";

$headers  = "Content-type: text/html; charset=windows-1251 \r\n";
$headers .= "From: User: ".$_POST['name']." <".$_POST['email'].">\r\n";
$headers .= "Bcc: ".$_POST['email']."\r\n";

mail($to, $subject, $message, $headers);