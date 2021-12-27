<?php

require_once dirname(__DIR__,2).'/interface/DaoFactoryInterface.php';
require_once dirname(__DIR__,1).'/db/DbItemDao.php';
require_once dirname(__DIR__,1).'/db/DbOrderDao.php';

use AbstractFactory\Concrete\Db\DbItemDao;
use AbstractFactory\Concrete\Db\DbOrderDao;
use AbstractFactory\Iinterface\DaoFactory;

class DbFactory implements DaoFactory{

    public function createItemDao()
    {
        return new DbItemDao();
    }

    public function createOrderDao()
    {
        return new DbOrderDao();
    }
}