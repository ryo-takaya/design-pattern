<?php
require_once dirname(__FILE__). '/'. "fileUtilInterface.php";


class CsvFileClass implements fileUtilInterface{
    private $filePath;

    public function __construct(string $filePath){
        if (!is_readable($filePath)){
            throw new Exception('fileが開けません');
        }

        $this->filePath = $filePath;
    }

    public function display()
    {
        $file = new SplFileObject($this->filePath);
        $file->setFlags(SplFileObject::READ_CSV);

        foreach ($file as $line){
            foreach ($line as $value){
                echo $value;
            }
        }
    }
}
