<?php

class Registration
{
    public function __construct(){

        if (!class_exists('R')){
            die('Подключите RedBeanPHP');
        }

        if (!R::testConnection()){
            die('Нет подключения к БД');
        }

    }


    public function registration_users(){
        $empty = null;
        $bean = R::dispense('users');
        if (!empty($_POST))
            foreach ($_POST as $item => $value){
                if ($item != 'password') {
                    $bean->$item = $value;
                    if (empty($value))
                        $empty++;
                    unset($_POST[$item]);
                }else{
                    $bean->$item = md5($value);
                }
            }
        else $empty++;
        if ($empty == null)
            R::store($bean);
    }
}

