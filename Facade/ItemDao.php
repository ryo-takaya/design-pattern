<?php
require_once dirname(__FILE__). '/'. 'ItemClass.php';

class ItemDao{
    private static $instance;
    private $items;

    private function __construct()
    {
        $this->items = [];
        $itemName = ['apple' => 100, 'banana' => 200, 'lemon' => 300];
        $i = 0;
        foreach ($itemName as $key => $value) {
            $this->items[$i]  = new Item($i, $key, $value);

        }
    }

    public static function create()
    {
        if (!isset(self::$instance)) {
           self::$instance = new ItemDao();
        }

        return self::$instance;
    }

    public function findById($item_id)
    {
        if (array_key_exists($item_id, $this->items)) {
            return $this->items[$item_id];
        }
        return null;
    }

    public function setAside(OrderItem $order_item)
    {
        echo $order_item->getItem()->getName(). "在庫準備";
    }

    public final function __clone() {
        throw new RuntimeException('cloneできません');
    }
}