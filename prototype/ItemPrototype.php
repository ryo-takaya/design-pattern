<?php

abstract class ItemPrototype{
    private $item_code;
    private $item_name;
    private $price;
    private $detail;

    public function __construct($code, $name, $price){
        $this->item_code = $code;
        $this->item_name = $name;
        $this->price = $price;
    }

    public function getName(){
        return $this->item_name;
    }

    public function dumpData(){
        echo $this->detail->comment;
        echo '<br>';
        echo $this->item_name;
    }

    public function getCode(){
        return $this->item_code;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getDetail() {
        return $this->detail;
    }

    public function setDetail($detail){
        $this->detail = $detail;
    }

    public function newInstance(){
        $new_instance = clone $this;
        return $new_instance;
    }

    protected abstract function __clone();
}