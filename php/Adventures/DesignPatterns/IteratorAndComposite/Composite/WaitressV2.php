<?php

/**
 * Created by thang.tran@tiki.vn
 * Date 12/6/15
 * Time 2:38 PM
 */

namespace DesignPatterns\IteratorAndComposite\Composite;

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
        $this->_allMenus->printHelper("");
    }

}