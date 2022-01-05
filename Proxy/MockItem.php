<?php
require_once dirname(__FILE__). '/Item.php';
require_once dirname(__FILE__). '/ItemDao.php';

class MockItem implements ItemDao{
    public function findById ($item_id){
        return new Item($item_id, 'モック用');
    }
}