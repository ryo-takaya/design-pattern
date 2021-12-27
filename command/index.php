<?php
require_once dirname(__FILE__). "/Quere.php";
require_once dirname(__FILE__). "/file.php";
require_once dirname(__FILE__). "/TouchCommand.php";
require_once dirname(__FILE__). "/CompressCommand.php";
require_once dirname(__FILE__). "/CopyCommand.php";

$queue = new Queue();
$file = new File('sample.txt');
$queue->addCommand(new TouchCommand($file));
$queue->addCommand(new CopyCommand($file));
$queue->addCommand(new CompressCommand($file));

$queue->run();