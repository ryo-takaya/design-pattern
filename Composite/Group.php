<?php
require_once dirname(__FILE__). '/OrganizationEntry.php';

class Group extends OrganizationEntry{
    private $entries;

    public function __construct($name, $code)
    {
        parent::__construct($name, $code);
        $this->entries = [];
    }

    public function add(OrganizationEntry $entry)
    {
        array_push($this->entries, $entry);
    }

    public function dump(){
        parent::dump();
        foreach ($this->entries as $entry){
            echo $entry->getName();
            $entry->dump();
        }
    }


}