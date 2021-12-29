<?php

require_once dirname(__FILE__). '/Context.php';
require_once dirname(__FILE__). '/Command.php';
require_once dirname(__FILE__). '/CommandCommand.php';
require_once dirname(__FILE__). '/CommandList.php';
require_once dirname(__FILE__). '/JobCommand.php';

function execute($command){
    $job = new JobCommand();
    try {
        $job->execute(new Context($command));
    } catch (Exception $e){
        echo $e->getMessage();
    }
}

execute('begin date line');