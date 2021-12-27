<?php
require_once dirname(__FILE__). '/'. 'Employee.php';

class SalesmanIterator extends FilterIterator{
    public function __construct(Iterator $iterator)
    {
        parent::__construct($iterator);
    }

    public function accept()
    {
        $employee = $this->current();
        return ($employee->getJob() === 'SALESMAN');
    }
}