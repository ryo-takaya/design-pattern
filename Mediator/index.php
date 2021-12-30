<?php
require_once dirname(__FILE__). '/User.php';
require_once dirname(__FILE__). '/ChatRoom.php';

$charRoom = new ChatRoom();

$a = new User('a');
$b = new User('b');
$c = new User('c');
$d = new User('d');

$charRoom->login($a);
$charRoom->login($b);
$charRoom->login($c);
$charRoom->login($d);

$a->sendMessage($b->getName(),'hello');
$c->sendMessage($d->getName(),'hellasdfasdo');
$b->sendMessage($c->getName(),'haaaaaaaaaaaaello');