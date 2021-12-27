<?php
namespace AbstractFactory\Iinterface;

interface DaoFactory{
    public function createItemDao();
    public function createOrderDao();
}