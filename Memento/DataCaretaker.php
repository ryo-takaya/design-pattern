<?php

class DataCaretaker {

    public function setSnapshot($snapshot){
        $_SESSION['snapshot'] = $snapshot;
    }

    public function getSnapshot(){
        return $_SESSION['snapshot'];
    }
}