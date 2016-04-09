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

namespace DesignPatterns\Observer\Events;

/**
 * @interface EventsAwareInterface
 */

interface EventsAwareInterface
{
    /**
     * @param $eventsManager
     * Sets the events manager
     */
    public function setEventsManager(ManagerInterface $eventsManager);

	/**
     * @param $eventsManager
     * Returns the internal event manager
     */
	public function getEventsManager(ManagerInterface $eventsManager);
}