<?php
require_once dirname(__FILE__). '/CartListener.php';
require_once dirname(__FILE__). '/Cart.php';
require_once dirname(__FILE__). '/PresentListener.php';
require_once dirname(__FILE__). '/LoggingListener.php';

$cart = new Cart();
$logging = new LoggingListener();
$present = new PresentListener();

$cart->addListener($logging);
$cart->addListener($present);

$cart->addItem('30:クッキーセット');
$cart->addItem('30:クッキーセット');

foreach($cart->getItems() as $key => $item){
  echo "{$key} {$item}";
  echo '<br>';
}

 echo get_class($cart);