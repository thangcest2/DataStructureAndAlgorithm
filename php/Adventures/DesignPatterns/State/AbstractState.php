<?php
/**
 * User: thangcest2
 * Date: 5/23/17
 * Time: 6:46 PM
 */

namespace DesignPatterns\State;


abstract class AbstractState
{
    /**
     * @var GumballMachine
     */
    protected $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }
}