<?php
/**
 * User: thangcest2
 * Date: 5/23/17
 * Time: 6:09 PM
 */

namespace DesignPatterns\State;


class GumballMachine
{
    private $soldOutState;

    private $noQuarterState;

    private $hasQuarterState;

    private $soldState;

    private $winnerState;

    private $currentState;

    private $numberOfGumball = 0;

    public function __construct($numberOfGumball)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);

        $this->numberOfGumball = $numberOfGumball;
        if ($this->numberOfGumball > 0) {
            $this->currentState = $this->noQuarterState;
        }
    }

    public function insertQuarter()
    {
        $this->currentState->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->currentState->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->currentState->turnCrank();
        $this->currentState->dispense();
    }

    public function setState(StateMachineInterface $stateMachine)
    {
        $this->currentState = $stateMachine;
    }

    public function releaseBall()
    {
        if ($this->numberOfGumball > 0) {
            $this->numberOfGumball -= 1;
        }
    }

    public function getSoldOutState()
    {
        return $this->soldOutState;
    }

    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }

    public function getSoldState()
    {
        return $this->soldState;
    }

    public function getWinnerState()
    {
        return $this->winnerState;
    }

    public function getNumberOfGumball()
    {
        return $this->numberOfGumball;
    }

    public function __toString()
    {
        $string = '---------------------------' . PHP_EOL . PHP_EOL;
        $string .= 'ThangTD Gumball, Inc' . PHP_EOL;
        $string .= 'Implemented by php 7.0' . PHP_EOL;
        $string .= "Inventory {$this->numberOfGumball} gumballs." . PHP_EOL;
        $string .= "Machine is wating for quarter..." . PHP_EOL;
        $string .= '---------------------------' . PHP_EOL . PHP_EOL;

        return $string;
    }
}