<?php

require_once dirname(__FILE__). '/Item.php';

class ItemFactory{
    private $pool;
    private static $instance = null;

    private function __construct($filename){
        $this->buildPool($filename);
    }

    /**
     * @return null
     */
    public static function getInstance($filename)
    {
        if(is_null(self::$instance)){
            self::$instance = new ItemFactory($filename);
        }
        return self::$instance;
    }

    public function getItem($item_code){
        if(array_key_exists($item_code,$this->pool)){
            return $this->pool[$item_code];
        }
        return null;
    }

    private function buildPool($filename){
        $this->pool = [];
        $f = fopen($filename, 'r');

        while ($buffer = fgets($f, 4096)){
            list($item_code, $item_name, $price) = explode('\t', $buffer);
            $this->pool[$item_code] = new Item($item_code, $item_name, $price);
        }
        fclose($f);
    }
}