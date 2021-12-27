<?php

require_once dirname(__FILE__). '/DataSource.php';

class FileDataSource implements DataSource{
    private $sourceName;
    private $handler;

    public function __construct($sourceName)
    {
        $this->sourceName = $sourceName;
    }

    public function open()
    {
       if(!is_readable($this->sourceName)){
           throw new Exception('ファイルを開けません');
       }
       $this->handler = fopen($this->sourceName, 'r');
       if(!$this->handler){
           throw new Exception('ファイルのオープンに失敗しました');
       }
    }

    public function read():string
    {
        $buffer = [];
        while (!feof($this->handler)){
           $buffer[] = fgets($this->handler);
        }
        return join($buffer);
    }

    public function close()
    {
        fclose($this->handler);
    }
}