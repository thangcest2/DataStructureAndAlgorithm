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

namespace DesignPatterns\Command\ImplementedCommands\CeilingFan;
use DesignPatterns\Command\Core\CommandInterface;
use DesignPatterns\Command\ExternalDevices\CeilingFan;

/**
* @class CeilingFanCommandGeneral
*/

abstract class CeilingFanCommandGeneral implements CommandInterface
{
    public abstract function execute();

    /**
     * @var CeilingFan
     */
    protected $_ceilingFan;
    public $_previousSpeed;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->_ceilingFan = $ceilingFan;
    }

    public function undo()
    {
        switch ($this->_previousSpeed) {
            case CeilingFan::HIGHT :
                $this->_ceilingFan->hight();
                break;
            case CeilingFan::MEDIUM :
                $this->_ceilingFan->medium();
                break;
            case CeilingFan::LOW :
                $this->_ceilingFan->low();
                break;
            case CeilingFan::OFF :
                $this->_ceilingFan->off();
                break;
            default :
                $this->_ceilingFan->off();
                break;
        }
        $this->_previousSpeed = $this->_ceilingFan->getSpeed();

    }


}