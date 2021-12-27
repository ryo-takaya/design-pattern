<?php
namespace AbstractFactory\Concrete\Db;

require_once dirname(__DIR__,2).'/interface/ItemDao.php';
use AbstractFactory\Iinterface\ItemDao;

class DbItemDao implements ItemDao{

    public function findById($item_id)
    {
        return '本番用itemオブジェクト';
    }
}