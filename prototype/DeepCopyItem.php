<?php
require_once dirname(__FILE__). '/ItemPrototype.php';

class DeepCopyItem extends ItemPrototype{
    protected function __clone(){
        $this->setDetail(clone $this->getDetail());
    }
}