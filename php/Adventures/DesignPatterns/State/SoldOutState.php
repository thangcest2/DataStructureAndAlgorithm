<?php
/**
 * User: thangcest2
 * Date: 5/23/17
 * Time: 10:17 PM
 */

namespace DesignPatterns\State;


class SoldOutState extends AbstractState implements StateMachineInterface
{
    public function insertQuarter()
    {
        echo 'You can not insert quarter, all gumball is sold out' . PHP_EOL;
    }

    public function ejectQuarter()
    {
        echo 'You can not eject quarter, you haven\'t inserted a quarter yet' . PHP_EOL;
    }

    public function turnCrank()
    {
        echo 'You turned, but there is no gumballs' . PHP_EOL;
    }

    public function dispense()
    {
        echo 'No gumball dispensed' . PHP_EOL;
    }
}