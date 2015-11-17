<?php

use Utilities\BashColorsString;
use \DesignPatterns\Decorator\StarbuzzCoffee as Starbuzz;
use \DesignPatterns\Factory\PizzaStore as PizzaStore;

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
                self::factoryPizzaApp();
                break;

            case 'singleton' :
                self::singletonApp();
                break;

            default :
                echo 'No app found or not yet code :v' . PHP_EOL;
                break;
        }

    }

    public static function observerWeatherApp()
    {
        $publisher = new \DesignPatterns\Observer\WeatherApp\WeatherStationPublisher();
        $device   = new \DesignPatterns\Observer\WeatherApp\GeneralDisplay($publisher);
        $device1   = new \DesignPatterns\Observer\WeatherApp\StatisticsDisplay($publisher);
        $device2   = new \DesignPatterns\Observer\WeatherApp\ForecastDisplay($publisher);
        $publisher->setMeasurement(20, 10.5, 5.4);
        echo PHP_EOL;
        $publisher->setMeasurement(25, 9.5, 4.4);
        echo PHP_EOL;
        $publisher->setMeasurement(15, 8.5, 3.4);
        echo PHP_EOL;

        $publisher->removeObserver($device1);
        $publisher->setMeasurement(15, 8.5, 3.4);
        echo PHP_EOL;

        $publisher->removeObserver($device2);
        $publisher->setMeasurement(15, 8.5, 3.4);
        echo PHP_EOL;
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

    public static function factoryPizzaApp()
    {
        $pizzaStoreHN = new PizzaStore\HaNoi\HaNoiPizzaStoreFactory();
        $pizzaStoreHN->orderPizza('spaggeti');

        $pizzaStoreHN = new PizzaStore\HaNoi\HaNoiPizzaStoreFactory();
        $pizzaStoreHN->orderPizza('cheese');

        echo PHP_EOL;

        $pizzaStoreHCM = new PizzaStore\HoChiMinh\HoChiMinhPizzaStoreFactory();
        $pizzaStoreHCM->orderPizza('cheese');

        $pizzaStoreHCM = new PizzaStore\HoChiMinh\HoChiMinhPizzaStoreFactory();
        $pizzaStoreHCM->orderPizza('spaggeti');

    }

    public static function singletonApp()
    {
//        \DesignPatterns\Singleton\EagerInstantiation\SingleTon::getInstance()->test();
        \DesignPatterns\Singleton\SubClasses\SingleTon::getInstance()->test();
        \DesignPatterns\Singleton\SubClasses\Test1::getInstance()->test2();
        \DesignPatterns\Singleton\NonThreadSafe\SingleTon::getInstance()->test();
    }

}