<?php

require_once dirname(__FILE__). '/UserState.php';
require_once dirname(__FILE__). '/Unaunth.php';

class Auth implements UserState{

    private static $singleton = null;

    private function __construct(){}

    public function getInstance(){
        if (self::$singleton === null){
            self::$singleton = new Auth();
        }
        return self::$singleton;
    }

    public function isAuthenticated(){
        return true;
    }
    public function nextState(){
        return Unaunth::getInstance();
    }
    public function getMenu(){
        echo '承認済みのメニューを表示';
    }
}