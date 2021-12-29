<?php
require_once dirname(__FILE__). '/Context.php';

interface Command{
    public function execute(Context $context);
}