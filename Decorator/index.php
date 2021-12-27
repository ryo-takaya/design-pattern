<?php
require_once dirname(__FILE__). '/PlainText.php';
require_once dirname(__FILE__). '/UpperCaseText.php';
require_once dirname(__FILE__). '/DoubleByteText.php';

$text = new PlainText();
$text->setText('test');

$decorator = 'deco';

switch ($decorator){
    case 'deco';
    $text = new DoubleByteText($text);
    break;
    case 'upper';
    $text = new UpperCaseText($text);
    break;
}

echo $text->getText();

