<?php
namespace Adapter\extend;

use displayUtilClass;

require_once dirname(__DIR__,1). '/'. 'displayUtilClass.php';
require_once dirname(__DIR__, 1). '/'. 'interface.php';

class AdapterExtendsDisplay extends displayUtilClass implements \highlightDisplay {

    public function __construct(string $filePath)
    {
        parent::__construct($filePath);
    }

    public function display()
    {
        parent::highlightDisplayContent();
    }
}

