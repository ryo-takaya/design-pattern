<?php

require_once dirname(__FILE__). '/ItemPrototype.php';

class ItemManager {
    private $items;

    public function __construct(){
        $this->items = [];
    }

    public function registerItem(ItemPrototype $item){
        $this->items[$item->getCode()] = $item;
    }

    public function create($item_code){
        if(!array_key_exists($item_code, $this->items)){
            throw new Exception('not Extists'. $item_code);
        }
        $clone = $this->items[$item_code]->newInstance();
        return $clone;
    }
}