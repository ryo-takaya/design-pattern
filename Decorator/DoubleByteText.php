<?php
require_once dirname(__FILE__). '/TextDecorator.php';

class DoubleByteText extends TextDecorator{

//    public function __construct(Text $text)
//    {
//        parent::__construct($text);
//    }
public function getText()
{
$str = parent::getText();
$str = mb_convert_kana($str);
return $str;
}
}