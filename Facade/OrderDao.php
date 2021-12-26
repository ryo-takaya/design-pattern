<?php

require_once dirname(__FILE__). '/'. 'OrderClass.php';

class OrderDao{

    public static function createOrder(Order $order){

        foreach ($order as $order_item) {
            echo "<div>{$order_item->getItem()->getName()}</div>>";
            echo "<div>{$order_item->getAmount()}</div>>";
            $fullPrice = $order_item->getItem()->getPrice() * $order_item->getAmount();
            echo "<div>{$fullPrice}</div>";
            echo "<div></div>>";
            echo "<div></div>>";
            echo "<div></div>>";
        }
    }
}