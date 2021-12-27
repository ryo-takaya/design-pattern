<?php

require_once dirname(__FILE__). "/Employee.php";
require_once dirname(__FILE__). "/Group.php";

$root = new Group('G:1', '本社');
$root->add(new Employee('E:1', 'CEO'));
$root->add(new Employee('E:2', 'CTO'));

$group1 = new Group('G1', '横浜支店');
$group1->add(new Employee((string)random_int(1,100), '支店長'));
$group1->add(new Employee((string)random_int(1,100), '課長'));
$group1->add(new Employee((string)random_int(1,100), '係長'));
$group1->add(new Employee((string)random_int(1,100), '平社員'));

$group2 = new Group('G2', '札幌支店');
$group2->add(new Employee((string)random_int(1,100), '課長'));
$group2->add(new Employee((string)random_int(1,100), '課長'));
$group1->add($group2);
$root->add($group1);

$group3 = new Group('G3', '札幌支店');
$group3->add(new Employee((string)random_int(1,100), '課長'));
$root->add($group3);

$root->dump();