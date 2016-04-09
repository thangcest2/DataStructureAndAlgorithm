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
* @class DogAdapter
*/

class DogAdapter implements DuckInterface
{
    /**
     * @var DogInterface
     */
    private $_dog;

    public function __construct(DogInterface $dog)
    {
        $this->_dog = $dog;
    }

    public function quack()
    {
        $this->_dog->gogo();
    }

    public function fly()
    {
        $this->_dog->jump();
    }

}