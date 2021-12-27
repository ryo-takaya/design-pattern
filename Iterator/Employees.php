<?php

require_once dirname(__FILE__). "/". "Employee.php";

class Employees implements IteratorAggregate{
    private $employees;
    public function __construct(){
        $this->employees = new arrayObject();
    }

    public function getIterator()
    {
        return $this->employees->getIterator();
    }

    public function addEmployee(Employee $employee){
        $this->employees[] = $employee;
    }
}
