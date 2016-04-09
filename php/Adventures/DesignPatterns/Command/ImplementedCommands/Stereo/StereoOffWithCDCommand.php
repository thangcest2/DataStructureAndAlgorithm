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

namespace DesignPatterns\Command\ImplementedCommands\Stereo;
use DesignPatterns\Command\Core\CommandInterface;
use DesignPatterns\Command\ExternalDevices\Stereo;

/**
* @class StereoOffWithCDCommand
*/

class StereoOffWithCDCommand implements CommandInterface
{

    /**
     * @var Stereo
     */
    private $_stereo;

    public function __construct(Stereo $stereo)
    {
        $this->_stereo = $stereo;
    }

    public function execute()
    {
        $this->_stereo->off();
    }

    public function undo()
    {
        $this->_stereo->on();
        $this->_stereo->setCD();
        $this->_stereo->setVolume(11);
    }

}