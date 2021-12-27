<?php

require_once dirname(__FILE__). '/Command.php';
require_once dirname(__FILE__). '/file.php';

/**
 * concreteCommandクラスに相当
 */

class CompressCommand implements Command{

    private $file;
    public function __construct(File $file)
    {
        $this->file = $file;
    }

    public function execute()
    {
        $this->file->compress();
    }
}