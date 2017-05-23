<?php
/**
 * User: thangcest2
 * Date: 5/23/17
 * Time: 10:20 PM
 */

namespace DesignPatterns\State;


class NoQuarterState extends AbstractState implements StateMachineInterface
{
    public function insertQuarter()
    {
        echo 'You inseted a quarter' . PHP_EOL;
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter()
    {
        echo 'You haven\'t inserted a quarter' . PHP_EOL;
    }

    public function turnCrank()
    {
        echo 'You turned, but there is no quarter' . PHP_EOL;
    }

    public function dispense()
    {
        echo 'You need to pay first' . PHP_EOL;
    }
}