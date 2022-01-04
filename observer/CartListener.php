<?php

require_once dirname(__FILE__). '/Cart.php';

interface CartListener {
    public function update(Cart $cart);
}