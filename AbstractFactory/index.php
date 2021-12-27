<?php
$env = $_GET['env'];

switch ($env){
    case 'prd';
      require_once dirname(__FILE__). '/concrete/dbFactory/DbFactory.php';
      $db = new DbFactory();
      break;
    case 'test';
      require_once dirname(__FILE__). '/concrete/dbFactory/MockFactory.php';
      $db = new MockFactory();
      break;
    default;
      throw new Exception('不正な文字列です');
}

$itemDao = $db->createItemDao();
$orderDao = $db->createOrderDao();

echo $itemDao->findById(1);
echo $orderDao->findById(1);


