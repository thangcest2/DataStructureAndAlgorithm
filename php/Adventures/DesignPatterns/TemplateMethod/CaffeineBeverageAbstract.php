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
 |          or             <thang.tran@tiki.vn>                           |
 +------------------------------------------------------------------------+
*/

namespace DesignPatterns\TemplateMethod;

/**
* @abstract class CaffeineBeverageAbstract
*/

abstract class CaffeineBeverageAbstract
{
    /**
     * Template method
     */
    public final function prepareRecipe(){
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if ($this->moreCondiments()) {
            $this->addCondiments();
        }
    }

    public abstract function brew();

    public abstract function addCondiments();

    public function boilWater()
    {
        echo "Boiling Water" . PHP_EOL;
    }

    public function pourInCup()
    {
        echo "Pouring down drink in cup" . PHP_EOL;
    }

    /**
     * Hook method
     */
    public function moreCondiments(){
        return true;
    }



}