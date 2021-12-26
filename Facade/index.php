<?php
require_once dirname(__FILE__). '/'. "OrderClass.php";
require_once dirname(__FILE__). '/'. "OrderItemClass.php";
require_once dirname(__FILE__). '/'. "ItemDao.php";
require_once dirname(__FILE__). '/'. "OrderManager.php";

$order = new Order();
$itemDao = ItemDao::create();

$order->addItem(new OrderItem($itemDao->findById(0),1));
$order->addItem(new OrderItem($itemDao->findById(0),2));
$order->addItem(new OrderItem($itemDao->findById(0),3));

OrderManager::order($order);