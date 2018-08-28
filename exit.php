<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 09.05.2018
 * Time: 17:16
 */
if (!isset($_SESSION))
    session_start();

unset($_SESSION);
session_destroy();
header("Location: /");