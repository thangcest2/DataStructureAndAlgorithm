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

namespace DesignPatterns\AdapterAndFacade\Facade\HomeTheaterSystem;

/**
* @class Projector
*/

class Projector
{
    private $_desc;
    private $_dvdPlayer;

    public function __construct($desc, DvdPlayer $dvdPlayer)
    {
        $this->_desc = $desc;
        $this->_dvdPlayer = $dvdPlayer;
    }

    public function on()
    {
        echo $this->_desc . " on" . PHP_EOL;
    }

    public function off()
    {
        echo $this->_desc . " off" . PHP_EOL;
    }

    public function wideScreenMode()
    {
        echo $this->_desc . " in widescreen mode (16x9 aspect ratio)" . PHP_EOL;
    }

    public function tvMode()
    {
        echo $this->_desc . " in tv mode (4x3 aspect ratio)" . PHP_EOL;
    }

    public function __toString(){
        return $this->_desc;
    }


}