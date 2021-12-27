<?php

require_once dirname(__FILE__). '/NotNullValidationHandler.php';
require_once dirname(__FILE__). '/ValidationHandler.php';
require_once dirname(__FILE__). '/AlphabetValidationHandler.php';

$validationHandler = new ValidationHandler();

$validationHandler->setHandler(new AlphabetValidationHandler());
$validationHandler->setHandler(new NotNullValidationHandler());
$input = 'sfads';
$result = $validationHandler->validate($input);

var_dump($result);