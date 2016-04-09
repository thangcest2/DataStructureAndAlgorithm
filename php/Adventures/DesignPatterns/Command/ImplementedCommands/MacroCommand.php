<?php
/*
 +------------------------------------------------------------------------+
 | ThangTD Adventures                                                     |
 +------------------------------------------------------------------------+
 | Source (https://github.com/thangcest2/DataStructureAndAlgorithm)       |
 +------------------------------------------------------------------------+
 | In love with my wife Mai Phuong Nguyen                                 |
 +------------------------------------------------------------------------+
 | Authors: Tran Duc Thang <thangcest2@gmail.com>                         |
 |          or             <thangcest2@gmail.com>                           |
 +------------------------------------------------------------------------+
*/

namespace DesignPatterns\Command\ImplementedCommands;
use DesignPatterns\Command\Core\CommandInterface;

/**
 * @class MacroCommand
 */

class MacroCommand implements CommandInterface
{
    /**
     * @var CommandInterface[]
     */
    private $_commands = [];

    public function __construct($command)
    {
        $this->_commands = $command;
    }

    public function execute()
    {
        $cmds = count($this->_commands);
        for ($i = 0; $i < $cmds; $i++) {
            $this->_commands[$i]->execute();
        }
    }

    public function undo()
    {
        $cmds = count($this->_commands);
        for ($i = 0; $i < $cmds; $i++) {
            $this->_commands[$i]->undo();
        }
    }

}