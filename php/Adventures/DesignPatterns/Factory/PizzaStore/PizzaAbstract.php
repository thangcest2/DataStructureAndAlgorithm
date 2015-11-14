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

namespace DesignPatterns\Factory\PizzaStore;
use Utilities\BashColorsString;

/**
 * @abstract class PizzaAbstract
 */

abstract class PizzaAbstract {

    protected $_name;

    protected $_dough;

    protected $_sauce;

    protected $_toppings = [];

    public function prepare() {
        echo BashColorsString::make("Preparing " . $this->_name . PHP_EOL, 'yellow');
        echo "Tossing dough" . PHP_EOL;
        echo "Adding sauce" . PHP_EOL;
        echo "Adding toppings: " . PHP_EOL;
        $topCount = count($this->_toppings);
        for ($i = 0; $i < $topCount; $i++) {
            echo $this->_toppings[$i];
        }

    }

    public function bake() {
        echo "Baking in 20 mins" . PHP_EOL;
    }

    public function cut() {
        echo "Cutting Pizza" . PHP_EOL;
    }

    public function box() {
        echo "Placing Pizza in official PizzaStore box" . PHP_EOL;
    }

    public function getName() {
        return $this->_name;
    }


}