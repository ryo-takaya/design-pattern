<?php
require_once dirname(__FILE__). "/validationInterface.php";

class ValidationHandler{
    private $validationQueue;

    public function __construct()
    {
        $this->validationQueue = [];
    }

    public function setHandler(validationInterface $handler)
    {
        $this->validationQueue[] = $handler;
        return $this;
    }

    public function validate($input){

        foreach ($this->validationQueue as $validation) {
            $result = $validation->execValidation($input);
            if(!$result){
                return $validation->getErrorMessage();
            }
        }

        return true;
    }
}