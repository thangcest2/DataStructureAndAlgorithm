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

namespace DesignPatterns\DependencyInjection;

/**
 * Class Injectable
 * @package DesignPatterns\DependencyInjection
 *
 * @keywords: DInjector === DIContainer
 *
 * Incase of you want to define a individual service at runtime instead of bootstrap from entry script,
 * firstly set which DInjector you want to use, then inject in to DInjector. Then your system can
 *
 * eg:
 * Widget.php
 * class Widget extends Injectable {
        public function __construct() {
 *          $this->setDI(YourApp::$diApp);
 *      }
 *      public function load() {
            return 'sometext';
 *      }
 *
 * }
 *
 * bootstrap.php
 * $widget = new Widget();
 * $widget->getDI()->set('widget', $widget);
 *
 * WidgetViewImplement.phtml
 * echo YourApp::$diApp->get('widget')->load();
 *
 */

abstract class Injectable implements InjectableInterface
{
    /**
     * @var DependencyInjectorInterface
     */
    protected $_dependencyInjector;

    /**
     * @param $dependencyInjector
     */
    public function setDI($dependencyInjector) {
        $this->_dependencyInjector = $dependencyInjector;
    }

    /**
     * @return DependencyInjector
     */
    public function getDI() {
        if (!$this->_dependencyInjector) {
            return DependencyInjector::getDefault();
        }
        return $this->_dependencyInjector;
    }


}