<?php

require_once dirname(__FILE__). '/ValidationHandler.php';
require_once dirname(__FILE__). '/validationInterface.php';

class AlphabetValidationHandler implements validationInterface {

    public function execValidation($input)
    {
        return (preg_match('/^[0-9]*$/',$input) < 0);
    }

    public function getErrorMessage()
    {
        return '半角英字で入力してください';
    }
}