<?php
require_once dirname(__FILE__). '/TextDecorator.php';

class UpperCaseText extends TextDecorator{

//    public function __construct(Text $text)
//    {
//        parent::__construct($text);
//    }
    public function getText()
    {
        $str = parent::getText();
        $str = strtoupper($str);
        return $str;
    }
}
