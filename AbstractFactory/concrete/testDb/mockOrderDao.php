<?php

namespace AbstractFactory\Concrete\TestDb;

require_once dirname(__DIR__,2).'/interface/OrderDao.php';
use \AbstractFactory\Interface\OrderDao;

class MockOrderDao implements OrderDao{


    public function findById($item_id)
    {
        return 'テスト用Orderオブジェクト';
    }
}