<?php
class Account{




    public function checkUserAuth(){
        if (isset($_SESSION)){
            if (isset($_SESSION['user'])){
                return true;
            }
        }
        return false;
    }

    /**
     * Перед вызовом session_start();
     */
    public function addSession($name,$value){
        if (isset($_SESSION)){
            $_SESSION[$name] = $value;
            return;
        }else{
            die("Запустите сессию!");
        }
    }

}