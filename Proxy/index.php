<?php

require_once dirname(__FILE__). '/ItemDaoProxy.php';
require_once dirname(__FILE__). '/DdItem.php';
require_once dirname(__FILE__). '/MockItemphp';

$request = $_GET['env'];

$dao;
switch($request){
    case 'prd':
        $dao = new DbItem();
        break;
    case 'dev':
        $dao = new MockItem();
}

if($request === 'dev'){
   $dao = new ItemDaoProxy($dao);
}

$dao->findById(2);