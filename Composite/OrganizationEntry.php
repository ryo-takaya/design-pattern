<?php

abstract class OrganizationEntry {
    private $code;
    private $name;

    public function __construct($name, $code){
        $this->name = $name;
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public abstract function add(OrganizationEntry $entry);

    public function dump() {
        echo $this->getCode(). ':' . $this->name;
    }
}