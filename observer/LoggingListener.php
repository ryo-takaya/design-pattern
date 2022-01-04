<?php
require_once dirname(__FILE__). '/CartListener.php';
require_once dirname(__FILE__). '/Cart.php';

class LoggingListener implements CartListener{
    public function update(Cart $cart){
        echo '<br>';
        var_dump($cart->getItems());
    }
}