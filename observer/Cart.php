<?php

class Cart{
    private $items;
    private $listeners;

    public function __construct(){
        $this->items = [];
        $this->liteners = [];
    }

    public function addItem($item_cd){
      $this->items[$items_cd] = (isset($this->items[$item_cd]) ? ++$this->items[$items_cd]:1);
      $this->notify();
    }

    public function removeItem($item_cd){
        $this->items[$items_cd] = (isset($this->items[$item_cd]) ? --$this->items[$items_cd]:0);
        if ($this->items[$item_cd] <= 0) {
            unset($this->items[$items_cd]);
        }
        $this->notify();
    }

    public function getItems(){
        return $this->items;
    }

    public function hasItem($items_cd){
        return array_key_exists($items_cd, $this->items);
    }

    public function addListener($listener){
        $this->listeners[get_class($listener)] = $listener;
    }

    public function removeListener($listener){
        unset($this->listeners[get_class($listener)]);
    }

    public function notify(){
        foreach($this->listeners as $listener){
            $listener->update($this);
        }
    }
}