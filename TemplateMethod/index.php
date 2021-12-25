<?php
require_once dirname(__FILE__)."/concreteClass.php";

$data = ['Design Patter', 'Gang of four', 'template1', 'template2'];

$list = new ListDisplay($data);
$table = new TableDisplay($data);
$list->display();
echo '<br>';

$table->display();
