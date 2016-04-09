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

namespace DesignPatterns\AdapterAndFacade\Facade;
use DesignPatterns\AdapterAndFacade\Facade\HomeTheaterSystem\Amplifer;
use DesignPatterns\AdapterAndFacade\Facade\HomeTheaterSystem\DvdPlayer;
use DesignPatterns\AdapterAndFacade\Facade\HomeTheaterSystem\PopcornPopper;
use DesignPatterns\AdapterAndFacade\Facade\HomeTheaterSystem\Projector;
use DesignPatterns\AdapterAndFacade\Facade\HomeTheaterSystem\Screen;
use DesignPatterns\AdapterAndFacade\Facade\HomeTheaterSystem\Tuner;
use DesignPatterns\AdapterAndFacade\Facade\HomeTheaterSystem\TheaterLights;
use Utilities\Bash;

/**
* @class HomeTheaterFacade
*/

class HomeTheaterFacade
{
    private $_amplifier;
    private $_tuner;
    private $_dvd;
    private $_projector;
    private $_light;
    private $_screen;
    private $_popper;

    public function __construct(Amplifer $amplifer, Tuner $tuner, DvdPlayer $dvdPlayer, Projector $projector, TheaterLights $light, Screen $screen, PopcornPopper $popper)
    {
        $this->_amplifier = $amplifer;
        $this->_tuner = $tuner;
        $this->_dvd = $dvdPlayer;
        $this->_projector = $projector;
        $this->_light = $light;
        $this->_screen = $screen;
        $this->_popper = $popper;
    }

    public function watchMovie($movie)
    {
        echo Bash::makeColor(" Ready to watch movie ... " . PHP_EOL, 'yellow');
        $this->_popper->on();
        $this->_popper->pop();

        $this->_light->dim(10);
        $this->_screen->down();

        $this->_projector->on();
        $this->_projector->wideScreenMode();

        $this->_amplifier->on();
        $this->_amplifier->setDvdPlayer($this->_dvd);
        $this->_amplifier->setSurroundSound();
        $this->_amplifier->setVolume(5);

        $this->_dvd->on();

        $this->_dvd->playMovie($movie);

    }

    public function endMovie()
    {
        echo Bash::makeColor(" Shutting Movie Theater down ... " . PHP_EOL, 'yellow');
        $this->_popper->off();
        $this->_light->on();
        $this->_screen->up();
        $this->_projector->off();
        $this->_amplifier->off();
        $this->_dvd->stop();
        $this->_dvd->eject();
        $this->_dvd->off();
    }


}