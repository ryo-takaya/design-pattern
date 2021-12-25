<?php

abstract class AbstractDisplay{

    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    protected function getData()
    {
        return $this->data;
    }

    public function display(){
        $this->displayHeader();
        $this->displayBody();
        $this->displayFooter();
    }

    protected abstract function displayHeader();
    protected abstract function displayBody();
    protected abstract function displayFooter();

}

?>