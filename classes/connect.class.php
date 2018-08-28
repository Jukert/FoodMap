<?php
class Connect{

    private $_config = null;
    private $confPath;

    function __construct(){

        if (!class_exists('R')){
            die("Подключите ReadBeanPHP");
        }


        $this->confPath =  str_replace("\\", "/", dirname(__DIR__)).'/config/db.php';
        if (!file_exists($this->confPath)){
            die('Создайте файл config/db.php с данными подключения к БД');
        }else{
            $this->_config = include($this->confPath);
        }

        if (!R::testConnection()){
            R::setup('mysql:host='.$this->_config['db_host'].';dbname='.$this->_config['db_name'], $this->_config['db_user'], $this->_config['db_pass']);
            R::testConnection();
        }

    }



    public function close_connection(){
        if (R::testConnection())
            R::close();
    }

}