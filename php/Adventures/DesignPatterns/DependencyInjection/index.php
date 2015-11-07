<?php
/**
 * CreatedBy: thang.tran@tiki.vn
 * Date: 10/24/15
 * Time: 5:00 PM
 */

define('BASE_PATH', dirname(__FILE__));

$loader = new Phalcon\Loader();
$loader->registerNamespaces([
    'DesignPatterns\DependencyInjection' => BASE_PATH,
    'DesignPatterns\Mvc' => dirname(BASE_PATH) . '/Mvc',
    'DesignPatterns\Observer' => dirname(BASE_PATH) . '/Observer',
])->register();

require 'FactoryDefault.php';
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
echo '1' . PHP_EOL;
echo $diApp->get('flashSession')->getMessage();
die;
//var_dump($diApp->get('sthing')->getParams());
var_dump($diApp->get('sthing')->getShare());die;
var_dump($diApp->get('sthing2')->getParams());
var_dump($diApp->get('view')->getParams());
var_dump($diApp->get('request')->getPost());

//todo see how injectable works
