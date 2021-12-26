<?php
require_once dirname(__FILE__). '/'. "fileUtilInterface.php";

class JsonFileClass implements fileUtilInterface{
    private $filePath;

    public function __construct(string $filePath){
        if (!is_readable($filePath)){
            throw new Exception('fileが開けません');
        }

        $this->filePath = $filePath;
    }

    public function display()
    {
       echo file_get_contents($this->filePath);
    }
}