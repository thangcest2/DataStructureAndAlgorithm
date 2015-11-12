<?php

use Utilities\BashColorsString;
use \DesignPatterns\Decorator\StarbuzzCoffee as Starbuzz;

class Application
{
    public static function run($key)
    {
        echo "--------------------------------------------" . PHP_EOL . PHP_EOL;
        echo BashColorsString::make("Below is a test result of '$key' application: ", 'red') . PHP_EOL;

        switch ($key) {
            case 'observer':
                self::observerWeatherApp();
                break;

            case 'di' :
                self::diApp();
                break;

            case 'strategy' :
                self::strategyDuckApp();
                break;

            case 'decorator' :
                self::decoratorStarbuzzApp();
                break;

            case 'factory' :
                self::factoryApp();
                break;

            default :
                echo 'No app found' . PHP_EOL;
                break;
        }

    }

    public static function observerWeatherApp()
    {
        $publisher = new \DesignPatterns\Observer\WeatherApp\WeatherStationPublisher();
        $device1   = new \DesignPatterns\Observer\WeatherApp\DisplayImplement($publisher);
        $device2   = new \DesignPatterns\Observer\WeatherApp\DisplayImplement($publisher);
        $device3   = new \DesignPatterns\Observer\WeatherApp\DisplayImplement($publisher);
        $publisher->removeObserver($device1);
        $publisher->addObserver($device2);
        $publisher->addObserver($device2);
        $publisher->addObserver($device2);
        $publisher->addObserver($device2);

        $publisher->setMeasurement('20%', 10.5, 5.4);
    }

    public static function diApp()
    {
        $diApp = new DesignPatterns\DependencyInjection\FactoryDefault();

        $urlConfig = [
            'base' => '/',
        ];
        $diApp->set('view', function () use ($urlConfig) {
            $view = new \DesignPatterns\Mvc\View\Engine();
            $view->setParams($urlConfig);

            return $view;
        });

        $diApp->set('sthing', new \DesignPatterns\Mvc\Dispatcher(), true);
        $diApp->set('sthing2', '\DesignPatterns\Mvc\Dispatcher');

        $flashSession = new \DesignPatterns\Mvc\Flash\Session();
        $flashSession->getDI()->set('flashSession', $flashSession);
        $diApp->get('flashSession')->setMessage('string', 'some text');
        var_dump($diApp->get('flashSession')->getMessage());
        var_dump($diApp->get('sthing'));
        var_dump($diApp->get('sthing2')->getParams());
        var_dump($diApp->get('view')->getParams());
        var_dump($diApp->get('request')->getPost());

    }

    public static function strategyDuckApp()
    {
        $redHeadDuck = new StrategyDuck\RedHeadDuck(new \StrategyDuck\FlyNoWay(), new \StrategyDuck\Squeak());
        $redHeadDuck->display();
        $redHeadDuck->performFly();
        $redHeadDuck->setFlyBehavior(new \StrategyDuck\FlyWithRocketPowerred());
        $redHeadDuck->performFly();
        $redHeadDuck->performQuack();
        $redHeadDuck->swim();
    }

    public static function decoratorStarbuzzApp()
    {
        //capuchino with soy and mocha
        $capuchino = new Starbuzz\TheDrinks\CapuchinoBeverage(5);
        $capuchino = new Starbuzz\TheCondiments\SoyCondiment($capuchino, 0.5);
        $capuchino = new Starbuzz\TheCondiments\MochaCondiment($capuchino, 0.9);
        echo BashColorsString::make($capuchino->getDescription() . ": " . $capuchino->cost() . '$' . PHP_EOL, 'yellow');

        $expresso = new Starbuzz\TheDrinks\ExpressoBeverage(5);
        $expresso = new Starbuzz\TheCondiments\WhipCondiment($expresso, 1);
        $expresso = new Starbuzz\TheCondiments\MochaCondiment($expresso, 0.9);
        $expresso = new Starbuzz\TheCondiments\MochaCondiment($expresso, 0.9);
        echo BashColorsString::make($expresso->getDescription() . " = " . $expresso->cost() . '$' . PHP_EOL, 'yellow');

    }

    public static function factoryApp()
    {

    }

}