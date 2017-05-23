<?php
/**
 * User: thangcest2
 * Date: 5/23/17
 * Time: 6:44 PM
 */

namespace DesignPatterns\State;


class SoldState extends AbstractState implements StateMachineInterface
{
    public function insertQuarter()
    {
        echo 'Please wait, we already sent you a gumball' . PHP_EOL;
    }

    public function ejectQuarter()
    {
        echo 'Sorry, you already turned the crank' . PHP_EOL;
    }

    public function turnCrank()
    {
        echo 'Turning twice doesn\'t give you another gumball' . PHP_EOL;
    }

    public function dispense()
    {
        echo 'Gumball is being out ... ';
        $this->gumballMachine->releaseBall();
        echo 'Done ! Please get yours.' . PHP_EOL;
        if ($this->gumballMachine->getNumberOfGumball() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo 'Opps, out of gumball !' . PHP_EOL;
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }
}