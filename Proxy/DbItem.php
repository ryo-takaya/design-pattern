<?php
require_once dirname(__FILE__). '/Item.php';
require_once dirname(__FILE__). '/ItemDao.php';

class DbItem implements ItemDao{
    public function findById($item_id){
        return new Item($item_id, '本番用');
    }
}