<?php

require_once dirname(__FILE__). '/Command.php';
require_once dirname(__FILE__). '/Context.php';
require_once dirname(__FILE__). "/Commandlist.php";

class JobCommand implements Command {

    public function execute(Context $context)
    {
        if($context->getCurrentCommand() !== 'begin'){
            throw new RuntimeException('不可能なコマンドです');
        }
        $commandlist = new CommandList();
        $commandlist->execute($context->next());
    }
}