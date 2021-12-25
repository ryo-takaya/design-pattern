<?php

require_once dirname(__FILE__). '/'. 'Adapter.php';

use Adapter\extend\AdapterExtendsDisplay;

try {
    $filePath = dirname(__DIR__. 2). '/'. 'test.txt';
    $file = new AdapterExtendsDisplay($filePath);

} catch (Exception $e){
    echo $e->getMessage();
}

$file->display();

//  継承だと必要のないメソッドまでアクセスできてしまう
$file->normalDisplayContent();