<?php
require_once dirname(__FILE__). '/ItemManager.php';
require_once dirname(__FILE__). '/shallowCopyItem.php';
require_once dirname(__FILE__). '/DeepCopyItem.php';

function testCopy (ItemManager $itemManager, $item_code){
    $item1 = $itemManager->create($item_code);
    $item2 = $itemManager->create($item_code);

    $item2->getDetail()->comment = 'コメントを書き換えました';

    $item1->dumpData();
    $item2->dumpData();
}

$manager = new ItemManager();

$item = new DeepCopyItem('deep', 'tシャツ', '300yen');
$detail = new stdClass();
$detail->comment = 'deepAのコメントです';
$item->setDetail($detail);
$manager->registerItem($item);

$shallow = new shallowCopyItem('shallow', 'ぺん', '400yen');
$detail = new stdClass();
$detail->comment = "shallowのコメントです";
$item->setDetail($detail);
$manager->registerItem($shallow);

testCopy($manager, $item->getCode());
testCopy($manager, $shallow->getCode());
