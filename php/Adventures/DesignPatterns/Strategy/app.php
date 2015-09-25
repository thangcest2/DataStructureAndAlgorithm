<?php
/**
 * Date: 9/6/15
 * Time: 3:56 PM
 * @property app.php $app.php
 */

require 'Duck.php';
require 'FlyBehavior.php';
require 'QuackBehavior.php';
require 'WoodDuck.php';
require 'RealDuck.php';
require 'FlyNoWay.php';
require 'FlyWithWings.php';
require 'Squeak.php';
require 'Quackable.php';
require 'MuteQuack.php';

require 'FlyWithRocketPowerred.php';
require 'RedHeadDuck.php';
//$woodDuck = new \StrategyDuck\WoodDuck\WoodDuck();
//$woodDuck->display();
//$woodDuck->fly();
//$woodDuck->quack();
//$woodDuck->swim();

//$realDuck = new \StrategyDuck\RealDuck(new \StrategyDuck\FlyWithWings\FlyWithWings(), new \StrategyDuck\Quackable\Quackable());
//$realDuck->display();
//$realDuck->fly();
//$realDuck->quack();
//$realDuck->swim();

$redHeadDuck = new StrategyDuck\RedHeadDuck(new \StrategyDuck\FlyNoWay\FlyNoWay(), new \StrategyDuck\Squeak\Squeak());
$redHeadDuck->display();
$redHeadDuck->performFly();
$redHeadDuck->setFlyBehavior(new \StrategyDuck\FlyWithRocketPowerred());
$redHeadDuck->performFly();
$redHeadDuck->performQuack();
$redHeadDuck->swim();