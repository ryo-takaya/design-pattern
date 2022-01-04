<?php
require_once dirname(__FILE__). '/CartListener.php';
require_once dirname(__FILE__). '/Cart.php';

class PresentListener implements CartListener{

    private static $PRESENT_TARGET_ITEM = '30:クッキーセット';
    private static $PRESENT_ITEM = '99:プレゼント';

    public function update(Cart $cart){
        if($this->isPresentCondition($cart)){
            $cart->addItem(self::$PRESENT_ITEM);
        }

        if($this->isRemoveCondition($cart)){
            $cart->removeItem(self::$PRESENT_ITEM);
        }
    }

    private function isPresentCondition(Cart $cart){
        return ($cart->hasItem(self::$PRESENT_TARGET_ITEM) && !$cart->hasItem(self::$PRESENT_ITEM));
    }

    private function isRemoveCondition(Cart $cart){
        return (!$cart->hasItem(self::$PRESENT_TARGET_ITEM) && $cart->hasItem(self::$PRESENT_ITEM));
    }
}