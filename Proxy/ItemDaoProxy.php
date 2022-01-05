<?php
require_once dirname(__FILE__). '/ItemDao.php';

class ItemDaoProxy implements ItemDao{

    private $dao;
    private $cache;

    public function __construct(ItemDao $dao){
        $this->dao = $dao;
        $this->cache = [];
    }

    public function findById($item_id){
        if(array_key_exists($item_id, $this->cache)){
            return 'キャッシュが存在します';
        }
        $this->cache[$item_id] = $this->dao->findById($item_id);
        return $this->dao->findById($item_id);
    }
}