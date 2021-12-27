<?php

namespace AbstractFactory\Concrete\Db;

require_once dirname(__DIR__,2).'/interface/OrderDao.php';
use \AbstractFactory\Interface\OrderDao;

class DbOrderDao implements OrderDao{


    public function findById($item_id)
    {
        return '本番用Orderオブジェクト';
    }
}