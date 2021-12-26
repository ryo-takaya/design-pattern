<?php

require_once dirname(__FILE__). "/". 'OrderItemClass.php';

class Order {
    private $items;
    public function __construct(){
        $this->items = [];
    }
    
    public function addItem(OrderItem $item){
        $this->items[$item->getItem()->getId()] = $item;
    }

    public function getItems(){
        return $this->items;
    }
}