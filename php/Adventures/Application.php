<?php

class Application
{
    public static function run($key)
    {
        echo "--------------------------------------------" . PHP_EOL . PHP_EOL;
        echo "\033[0;31m Below is a test result of '$key' application: \033[0m" . PHP_EOL;

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


        }
    }

    public static function observerWeatherApp() {
        $publisher = new \DesignPatterns\Observer\WeatherApp\WeatherStationPublisher();
        $device1 = new \DesignPatterns\Observer\WeatherApp\DisplayImplement($publisher);
        $device2 = new \DesignPatterns\Observer\WeatherApp\DisplayImplement($publisher);
        $device3 = new \DesignPatterns\Observer\WeatherApp\DisplayImplement($publisher);
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
        $diApp->set('view', function() use ($urlConfig) {
            $view = new \DesignPatterns\Mvc\View\Engine();
            $view->setParams($urlConfig);
            return $view;
        });

        $diApp->set('sthing', new \DesignPatterns\Mvc\Dispatcher(), true);
        $diApp->set('sthing2', '\Mvc\Dispatcher');

        $flashSession = new \DesignPatterns\Mvc\Flash\Session();
        $flashSession->getDI()->set('flashSession', $flashSession);
        $diApp->get('flashSession')->setMessage('string', 'some text');
        echo $diApp->get('flashSession')->getMessage();

        var_dump($diApp->get('sthing'));die;
        var_dump($diApp->get('sthing2')->getParams());
        var_dump($diApp->get('view')->getParams());
        var_dump($diApp->get('request')->getPost());
        die;
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

}