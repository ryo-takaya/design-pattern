<?php

require_once dirname(__FILE__). '/UserState.php';
require_once dirname(__FILE__). '/Auth.php';

class Unaunth implements UserState{

    private static $singleton = null;

    private function __construct(){}

    public function getInstance(){
        if (self::$singleton === null){
            self::$singleton = new Unaunth();
        }
        return self::$singleton;
    }

    public function isAuthenticated(){
        return true;
    }
    public function nextState(){
        return Auth::getInstance();
    }
    public function getMenu(){
        echo '未承認のメニューを表示';
    }
}