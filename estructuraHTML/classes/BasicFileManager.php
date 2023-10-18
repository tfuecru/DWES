<?php

class BasicFileManager{
    
    function __construct() {
        
    }

    function createFolder(string $name){
        $creates = false;
        if (!is_dir($name)) {
            mkdir($name);
            $created = true;
        }
        return $created;
    }
    
    function deleteFile(string $name){
        return unlink($name);  // Borrar archivos, ficheros
    }
    
    function prefix() {
        //aaaammddhhMMss
        $date = new DateTime();
        $timezone = new DateTimeZone('Europe/Madrid');
        $date->setTimezone($timezone);
        return $date->format('YmdHis');
    }
    
    /**
     * .....
     * 
     * @return number It returns the number of uploaded files
     * */

    // Esta función 1º crea la carpeta y luego la sube

    function set($name, $target) {
        $number = 1;
        $created = $this->createFolder($target);
        $uploaded = $this->upload($name, $target);
        if(!$uploaded) {
            if($created) {
                rmdir($target); //borrar carpetas, directorios
            }
            $number = 0;
        }
        return $number;
    }

    function upload(string $name, string $target) {
        if(isset($_FILES[$name]) &&
            $_FILES[$name]['error'] == 0 &&
            str_contains(mime_content_type($_FILES[$name]['tmp_name']), 'text/plain')) {
                $fileName = $this->prefix() . '_' . $_FILES[$name]['name'];
                return move_uploaded_file($_FILES[$name]['tmp_name'], $target . '/' . $fileName);
        }
        return false;
    }
}