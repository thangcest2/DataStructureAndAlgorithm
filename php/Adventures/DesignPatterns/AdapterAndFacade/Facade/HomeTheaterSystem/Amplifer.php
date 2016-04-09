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
* @class Amplifer
*/

class Amplifer
{
    /**
     * @var Tuner
     */
    private $_tuner;
    /**
     * @var DvdPlayer
     */
    private $_dvdPlayer;
    /**
     * @var CdPlayer
     */
    private $_cdPlayer;
    
    private $_desc = '';

    public function __construct($desc)
    {
        $this->_desc = $desc;
    }

    public function on()
    {
        echo $this->_desc . " on" . PHP_EOL;
    }

    public function off()
    {
        echo $this->_desc . " off" . PHP_EOL;
    }

    public function setTuner(Tuner $tuner)
    {
        echo $this->_desc . " setting tuner to " . $tuner . PHP_EOL;
        $this->_tuner = $tuner;
    }

    public function setDvdPlayer(DvdPlayer $dvdPlayer)
    {
        $this->_dvdPlayer = $dvdPlayer;
    }

    public function setCdPlayer(CdPlayer $cdPlayer)
    {
        $this->_cdPlayer = $cdPlayer;
    }

    public function setSurroundSound()
    {
        echo $this->_desc . " surround sound on (5 speakers, 1 subwoofer)" . PHP_EOL;
    }

    public function setVolume($i){
        echo $this->_desc . " setting volume to $i" . PHP_EOL;
    }

    public function __toString() {
        return $this->_desc;
    }

}