<?php
/**
 * CreatedBy: thangcest2@gmail.com
 * Date: 11/4/15
 * Time: 11:19 AM
 */

//use Phalcon\Events\Manager as EventsManager;
//use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
//
//require 'MyDbListener.php';
//
//$eventsManager = new EventsManager();
//
//// Create a database listener
//$dbListener    = new MyDbListener();
//
//// Listen all the database events
//$eventsManager->attach('db', $dbListener);
//
//$connection    = new DbAdapter(
//    array(
//        "host"     => "localhost",
//        "username" => "root",
//        "password" => "root",
//        "dbname"   => "delishop"
//    )
//);
//
//// Assign the eventsManager to the db adapter instance
//$connection->setEventsManager($eventsManager);
//
//// Send a SQL command to the database server
//$connection->query("SELECT * FROM deli_billing");


require 'MyComponent.php';
require 'SomeListener.php';
use Phalcon\Events\Manager as EventsManager;

// Create an Events Manager
$eventsManager = new EventsManager();

// Create the MyComponent instance
$myComponent   = new MyComponent();

// Bind the eventsManager to the instance
$myComponent->setEventsManager($eventsManager);

// Attach the listener to the EventsManager
$eventsManager->attach('my-component', new SomeListener());

// Execute methods in the component
$myComponent->someTask();