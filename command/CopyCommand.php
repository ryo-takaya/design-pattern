<?php

require_once dirname(__FILE__). '/Command.php';
require_once dirname(__FILE__). '/file.php';

/**
 * concreteCommandクラスに相当
 */

class CopyCommand implements Command{

    private $file;
    public function __construct(File $file)
    {
        $this->file = $file;
    }

    public function execute()
    {
        $file = new File('copy of'. $this->file->getName());
        $file->create();
    }
}