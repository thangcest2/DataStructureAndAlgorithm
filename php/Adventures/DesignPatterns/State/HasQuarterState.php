<?php
/**
 * User: thangcest2
 * Date: 5/23/17
 * Time: 10:18 PM
 */

namespace DesignPatterns\State;


class HasQuarterState extends AbstractState implements StateMachineInterface
{
    public function insertQuarter()
    {
        echo 'You can\'t insert another quarter' . PHP_EOL;
    }

    public function ejectQuarter()
    {
        echo 'Quarter ejected.' . PHP_EOL;
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank()
    {
        echo 'You turned the crank.' . PHP_EOL;
        $winner = rand(0, 9);
        if ($winner == 0 && $this->gumballMachine->getNumberOfGumball() > 1) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    public function dispense()
    {
        echo 'No gumball dispensed' . PHP_EOL;
    }
}