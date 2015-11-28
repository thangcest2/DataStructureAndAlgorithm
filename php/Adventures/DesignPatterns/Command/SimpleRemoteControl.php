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
 |          or             <thang.tran@tiki.vn>                           |
 +------------------------------------------------------------------------+
*/

namespace DesignPatterns\Command;
use DesignPatterns\Command\Core\CommandInterface;

/**
* @class SimpleRemoteControl
*/

class SimpleRemoteControl
{
    /**
     * @var CommandInterface
     */
    protected $_slotCommand;

    public function __construct()
    {

    }

    public function setCommand(CommandInterface $command)
    {
        $this->_slotCommand = $command;
    }

    public function buttonWasPressed()
    {
        $this->_slotCommand->execute();
    }

}