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

namespace DesignPatterns\AdapterAndFacade\Adapter;

/**
* @class TurkeyAdapter
*/

class TurkeyAdapter implements DuckInterface
{
    /**
     * @var TurKeyInterface
     */
    private $_turkey;

    public function __construct(TurKeyInterface $turkey)
    {
        $this->_turkey = $turkey;
    }

    public function quack()
    {
        $this->_turkey->gobble();
    }

    public function fly()
    {
        for ($i = 0; $i < 3; $i++) {
            $this->_turkey->fly();
        }
    }

}