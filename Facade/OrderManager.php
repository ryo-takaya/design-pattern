<?php

require_once dirname(__FILE__). '/'. "OrderClass.php";
require_once dirname(__FILE__). '/'. "ItemDao.php";
require_once dirname(__FILE__). '/'. "OrderDao.php";

class OrderManager{
    public static function order(Order $order){
        $itemDao = ItemDao::create();
        foreach ($order->getItems() as $orderItem){
            $itemDao->setAside($orderItem);
        }
        OrderDao::createOrder($order);
    }
}