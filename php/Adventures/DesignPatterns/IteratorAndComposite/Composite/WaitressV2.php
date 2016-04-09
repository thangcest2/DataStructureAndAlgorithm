<?php

/**
 * Created by thangcest2@gmail.com
 * Date 12/6/15
 * Time 2:38 PM
 */

namespace DesignPatterns\IteratorAndComposite\Composite;

use DesignPatterns\IteratorAndComposite\Iterator\MenuItem;
use Utilities\Bash;

class WaitressV2
{

    /**
     * @var MenuComponentAbstract
     */
    private $_allMenus;

    public function __construct(MenuComponentAbstract $menuComponentAbstract)
    {
        $this->_allMenus = $menuComponentAbstract;
    }

    public function printMenu() {
        $this->_allMenus->printHelper();
    }

    public function printVegeterianMenu()
    {
        $it = $this->_allMenus->getIterator();
        echo Bash::makeColor("All vegetarian" . PHP_EOL, Bash::CYAN);
        while ($it->valid()) {
            /**
             * @var $menuC Menu | MenuItem
             */
            $menuC = $it->next();
            if ($menuC->isVegetarian()) {
                $menuC->printHelper();
            }

        }

    }

}