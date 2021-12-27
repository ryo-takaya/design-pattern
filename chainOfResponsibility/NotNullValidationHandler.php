<?php

require_once dirname(__FILE__). '/ValidationHandler.php';
require_once dirname(__FILE__). '/validationInterface.php';

class NotNullValidationHandler implements validationInterface{

    public function execValidation($input)
    {
        return (is_string($input)  && mb_strlen($input) !== 0);
    }

    public function getErrorMessage()
    {
        return '入力してください';
    }
}