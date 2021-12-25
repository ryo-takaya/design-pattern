<?php

require_once dirname(__FILE__). '/'. 'Adapter.php';

use Adapter\Delegate\AdapterDelegateDisplay;

try {
    $filePath = dirname(__DIR__. 2). '/'. 'test.txt';
    $file = new AdapterDelegateDisplay($filePath);

} catch (Exception $e){
    echo $e->getMessage();
}

$file->display();