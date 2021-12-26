<?php
require_once dirname(__FILE__). '/'. "factory.php";

$path = dirname(__DIR__, 1). '/'. 'test.csv';
$file = FileUtilFactory::create($path);
$file->display();