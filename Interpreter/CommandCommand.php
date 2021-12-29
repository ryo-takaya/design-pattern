<?php
require_once dirname(__FILE__). '/Command.php';
require_once dirname(__FILE__). '/Context.php';
require_once dirname(__FILE__). "/Commandlist.php";

class CommandCommand implements Command {

    public function execute(Context $context)
    {
        $current_command = $context->getCurrentCommand();
        if($current_command === 'diskspace'){
            echo 'diskspace';
        } else if($current_command === 'date'){
            echo date('Y/M/D');
        } else if($current_command === 'line'){
            echo '---------------------------';
        } else {
            throw new Exception('invalid command');
        }
    }
}