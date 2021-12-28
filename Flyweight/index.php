<?php
require_once dirname(__FILE__). '/ItemFactory.php';


$factory = ItemFactory::getInstance(dirname(__FILE__).'/data.txt');
$a = $factory->getItem('1');
$b = $factory->getItem('2');
$c = $factory->getItem('3');

var_dump($a);
var_dump($b);
var_dump($c);