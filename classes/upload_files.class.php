<?php

class Upload{

private $_files_directories = null;


    public function __construct($directories)
    {
        if ($directories!=null)
            $this->_files_directories = $directories;
    }

    public function upload_files(){

        // Проверяем загружен ли файл
        if(is_uploaded_file($_FILES["file"]["tmp_name"]))
        {
            // Если файл загружен успешно, перемещаем его
            // из временной директории в конечную
            move_uploaded_file($_FILES["file"]["tmp_name"], $this->_files_directories.trim($_FILES["file"]["name"]));
            echo $_FILES["file"]["name"];
        }
    }



}