<?php
namespace AbstractFactory\Concrete\TestDb;

require_once dirname(__DIR__,2).'/interface/ItemDao.php';
use \AbstractFactory\Interface\ItemDao;

class MockItemDao implements ItemDao{

    public function findById($item_id)
    {
        return 'テスト用itemオブジェクト';
    }
}