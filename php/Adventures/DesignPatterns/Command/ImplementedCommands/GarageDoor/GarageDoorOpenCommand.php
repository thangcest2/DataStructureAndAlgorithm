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

namespace DesignPatterns\Command\ImplementedCommands\GarageDoor;
use DesignPatterns\Command\Core\CommandInterface;
use DesignPatterns\Command\ExternalDevices\GarageDoor;

/**
* @class GarageDoorOpenCommand
*/

class GarageDoorOpenCommand implements CommandInterface
{
    /**
     * @var GarageDoor
     */
    protected $_garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->_garageDoor = $garageDoor;

    }

    public function execute()
    {
        $this->_garageDoor->up();
        $this->_garageDoor->lightOn();
    }

    public function undo()
    {
        $this->_garageDoor->down();
    }


}