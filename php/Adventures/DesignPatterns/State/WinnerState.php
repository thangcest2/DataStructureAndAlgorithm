<?php
/**
 * User: thangcest2
 * Date: 5/23/17
 * Time: 10:24 PM
 */

namespace DesignPatterns\State;


class WinnerState extends AbstractState implements StateMachineInterface
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
        echo 'YOU ARE WINNER! You get 2 gumballs for your quarter.' . PHP_EOL;
        $this->gumballMachine->releaseBall();

        if ($this->gumballMachine->getNumberOfGumball() > 0) {
            $this->gumballMachine->releaseBall();
            if ($this->gumballMachine->getNumberOfGumball() > 0) {
                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            } else {
                echo 'Opps, out of gumballs.' . PHP_EOL;
                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }
}