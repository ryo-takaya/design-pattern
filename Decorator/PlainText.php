<?php

require_once dirname(__FILE__). '/TextInterface.php';

class PlainText implements Text{

    private $textString = null;

    public function getText()
    {
        return $this->textString;
    }

    public function setText($text)
    {
        $this->textString = $text;
    }
}