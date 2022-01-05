<?php

require_once dirname(__FILE__). '/Unaunth.php';

class User {
    private $name;
    private $state;
    
    public function __construct($name){
        $this->name = $name;
        $this->state = Unaunth::getInstance();
    }

    public function switchState(){
        $this->state = $this->state->nextState();
    }

    public function isAuth(){
        return $this->isAuthenticated();
    }

    public function getMenu(){
        $this->state->getMenu();
    }

    
}