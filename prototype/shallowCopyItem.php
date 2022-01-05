<?php
require_once dirname(__FILE__). '/ItemPrototype.php';

class ShallowCopyItem extends ItemPrototype{
    protected function __clone(){}
}