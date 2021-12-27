<?php

require_once dirname(__DIR__,2).'/interface/DaoFactoryInterface.php';
require_once dirname(__DIR__,1).'/testDb/mockItemDao.php';
require_once dirname(__DIR__,1).'/testDb/mockOrderDao.php';

use AbstractFactory\Concrete\TestDb\MockItemDao;
use AbstractFactory\Iinterface\DaoFactory;
use AbstractFactory\Concrete\TestDb\MockOrderDao;

class MockFactory implements DaoFactory{

    public function createItemDao()
    {
        return new MockItemDao();
    }

    public function createOrderDao()
    {
        return new MockOrderDao();
    }
}