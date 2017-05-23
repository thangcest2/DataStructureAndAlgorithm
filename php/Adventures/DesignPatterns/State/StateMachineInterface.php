<?php
/**
 * User: thangcest2
 * Date: 5/23/17
 * Time: 6:43 PM
 */

namespace DesignPatterns\State;


interface StateMachineInterface
{
    public function insertQuarter();

    public function ejectQuarter();

    public function turnCrank();

    public function dispense();
}