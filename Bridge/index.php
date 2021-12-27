<?php
require_once dirname(__FILE__). '/FileDataSource.php';
require_once dirname(__FILE__). '/Listing.php';
require_once dirname(__FILE__). '/ExtendsListing.php';

$path = dirname(__DIR__,1). "/test.json";
$list = new Listing(new FileDataSource($path));

try{
    $list->open();
} catch (Exception $e){
    echo $e->getMessage();
}

echo $list->read();

$list->close();