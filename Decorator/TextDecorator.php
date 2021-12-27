<?php
require_once dirname(__FILE__). '/TextInterface.php';

abstract class TextDecorator implements Text{
    private $text;

    public function __construct(Text $text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text->getText();
    }

    /**
     * @param Text $text
     */
    public function setText($text): void
    {
        $this->text->setText($text);
    }
}