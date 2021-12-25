<?php

namespace Adapter\Delegate;

require_once dirname(__DIR__,1). '/'. 'displayUtilClass.php';
require_once dirname(__DIR__,1). '/'. 'interface.php';

class AdapterDelegateDisplay implements \highlightDisplay{

    private $delegate;

    public function __construct(string $filePath)
    {
        $this->delegate = new \displayUtilClass($filePath);
    }
    public function display()
    {
        $this->delegate->highlightDisplayContent();
    }
}