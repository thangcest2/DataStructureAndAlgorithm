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

namespace DesignPatterns\Command;
use DesignPatterns\Command\Core\CommandInterface;
use DesignPatterns\Command\ImplementedCommands\NoCommand;

/**
* @class RealRemoteControl
*/

class RealRemoteControl
{
    /**
     * @var CommandInterface[]
     */
    protected $_onCommand = [];

    /**
     * @var CommandInterface[]
     */
    protected $_offCommand = [];

    /**
     * @var CommandInterface
     */
    protected $_undoCommand;

    public function __construct()
    {
        $noCommand = new NoCommand();

        for($i = 0; $i < 7; $i++) {
            $this->_onCommand[$i] = $noCommand;
            $this->_offCommand[$i] = $noCommand;
        }

        $this->_undoCommand = $noCommand;
    }

    public function setCommand($slot, CommandInterface $onCommand, CommandInterface $offCommand)
    {
        $this->_onCommand[$slot] = $onCommand;
        $this->_offCommand[$slot] = $offCommand;

    }

    public function onButtonWasPressed($slot)
    {
        $this->_onCommand[$slot]->execute();
        $this->_undoCommand = $this->_onCommand[$slot];
    }

    public function offButtonWasPressed($slot)
    {
        $this->_offCommand[$slot]->execute();
        $this->_undoCommand = $this->_offCommand[$slot];
    }

    public function undoButtonWasPressed()
    {
        $this->_undoCommand->undo();
    }


}