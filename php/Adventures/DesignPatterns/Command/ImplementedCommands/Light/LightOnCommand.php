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

namespace DesignPatterns\Command\ImplementedCommands\Light;
use DesignPatterns\Command\Core\CommandInterface;
use DesignPatterns\Command\ExternalDevices\Light;

/**
 * @class LightOnCommand
 */

class LightOnCommand implements CommandInterface
{
    /**
     * @var Light
     */
    protected $_light;

    /**
     * @param $light Light
     */
    public function __construct(Light $light)
    {
        $this->_light = $light;
    }

    /**
     *
     */
    public function execute()
    {
        $this->_light->on();
    }

    public function undo()
    {
        $this->_light->off();
    }

}