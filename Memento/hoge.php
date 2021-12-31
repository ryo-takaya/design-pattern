<?php
require_once dirname(__FILE__). '/Data.php';
require_once dirname(__FILE__). '/DataCaretaker.php';

session_start();

$box = new DataCaretaker();
$data = new Data();

$data->addComment('hogehoge');
$box->setSnapshot($data->takeSnapshot());
$data->addComment('hogesadsiugrhalsknflaus');
echo implode($data->getComment());
echo '<br>';
$data->restoreSnapshot($box->getSnapshot());
echo implode($data->getComment());