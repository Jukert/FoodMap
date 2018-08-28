<?php

class Auth{

    public function __construct(){
        if (!class_exists('R')){
            die('Подключите RedBeanPHP');
        }
        if (!R::testConnection()){
            die('Нет подключения к БД');
        }
    }
    private function query_users($login,$password){
        return $this->verification(R::find('users','login = ?',array($login)),$password);
    }
    private function query_admin($login,$password){
        return $this->verification(R::find('admin','login = ?',array($login)),$password);
    }

    private function verification($users,$password){
        if (empty($users))
            echo 2;
        foreach ($users as $user) {
            if ($user->password == $password){
                return true;
            }
        }
        echo 3;
        return false;
    }
    public function valid($login,$password){
        return $this->query_users($login,md5($password));
    }

    public function valid_admin($login,$password){
        return $this->query_admin($login,md5($password));
    }
}