<?php

require_once dirname(__FILE__). '/DataSource.php';

class Listing{
    private $data_source;

    public function __construct(DataSource $data_source)
    {
        $this->data_source = $data_source;
    }

    public function open(){
        $this->data_source->open();
    }

    public function read(){
      return  $this->data_source->read();
    }

    public function close(){
        $this->data_source->close();
    }
}