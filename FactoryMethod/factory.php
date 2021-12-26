<?php

require_once dirname(__FILE__). '/'. "fileUtilInterface.php";
require_once dirname(__FILE__). '/'. "jsonFileClass.php";
require_once dirname(__FILE__). '/'. "csvFileClass.php";
class FileUtilFactory{
    private static $fileExtentions = [
        'json', 'csv'
    ];

    public function __construct()
    {
        throw new BadFunctionCallException('createメソッドを使ってください');
    }

    public static function create(string $filePath):fileUtilInterface
    {
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        $index = array_search($extension, self::$fileExtentions);

        if($index === false){
            throw new Exception('該当する拡張子ではありません');
        }
        switch ($extension){
            case 'json':
               return new JsonFileClass($filePath);
            case 'csv':
                return new CsvFileClass($filePath);
            default:
                throw new Exception('原因不明');
        }
    }
}