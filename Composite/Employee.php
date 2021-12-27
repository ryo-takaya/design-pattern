<?php
require_once dirname(__FILE__). '/OrganizationEntry.php';

class Employee extends OrganizationEntry{

    public function __construct($name, $code)
    {
        parent::__construct($name, $code);
    }

    public function add(OrganizationEntry $entry)
    {
        throw new Exception('method Not allowd');
    }
}