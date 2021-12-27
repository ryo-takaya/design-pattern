<?php

interface validationInterface{
    public function execValidation($input);
    public function getErrorMessage();
}