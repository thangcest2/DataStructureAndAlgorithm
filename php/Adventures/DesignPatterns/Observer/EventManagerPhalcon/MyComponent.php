<?php

use Phalcon\Events\EventsAwareInterface;
use \Phalcon\Events\ManagerInterface;

class MyComponent implements EventsAwareInterface
{
    protected $_eventsManager;

    public function setEventsManager(ManagerInterface $eventsManager)
    {
        $this->_eventsManager = $eventsManager;
    }

    public function getEventsManager()
    {
        return $this->_eventsManager;
    }

    public function someTask()
    {
        $this->_eventsManager->fire("my-component:beforeSomeTask", $this);

        // Do some task
        echo "Here, someTask\n";

        $this->_eventsManager->fire("my-component:afterSomeTask", $this);
    }
}