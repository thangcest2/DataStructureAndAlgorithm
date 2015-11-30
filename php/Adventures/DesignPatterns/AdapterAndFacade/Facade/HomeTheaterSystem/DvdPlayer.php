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

namespace DesignPatterns\AdapterAndFacade\Facade\HomeTheaterSystem;

/**
* @class DvdPlayer
*/

class DvdPlayer
{
    private $_desc = '', $_movie, $_currentTrack;

    /**
     * @var Amplifer
     */
    private $_amplifier;

    public function __construct($desc, Amplifer $amplifer) {
        $this->_desc = $desc;
        $this->_amplifier = $amplifer;
    }

    public function __toString()
    {
        return $this->_desc;
    }

    public function on()
    {
        echo $this->_desc . " on" . PHP_EOL;
    }

    public function off()
    {
        echo $this->_desc . " off" . PHP_EOL;
    }

    public function playMovie($movie)
    {
        $this->_movie = $movie;
        $this->_currentTrack = 0;
        echo $this->_desc . " playing \"$movie\"" . PHP_EOL;
    }

    public function playTrack($track){
        if (empty($this->_movie)) {
            echo $this->_desc . " can not play track $track, no dvd inserted" . PHP_EOL;
        } else {
            $this->_currentTrack = $track;
            echo $this->_desc . " playing track $track of movie " . $this->_movie . PHP_EOL;
        }
    }

    public function stop()
    {
        $this->_currentTrack = 0;
        echo $this->_desc . " stopped movie " . $this->_movie . PHP_EOL;
    }

    public function eject()
    {
        $this->_movie = null;
        echo $this->_desc . " ejected ". PHP_EOL;
    }

    public function pause()
    {
        echo $this->_desc . " paused movie " . $this->_movie . PHP_EOL;
    }

    public function setSurroundAudio()
    {
        echo $this->_desc . " set surround audio " . PHP_EOL;
    }


}