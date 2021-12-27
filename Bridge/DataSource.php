<?php

interface DataSource{
    public function open();
    public function read():string;
    public function close();
}