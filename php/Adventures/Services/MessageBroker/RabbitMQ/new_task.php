<?php
/**
 * CreatedBy: thangcest2@gmail.com
 * Date: 3/5/16
 * Time: 9:25 AM
 */

require_once __DIR__ . '/../../../../vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('task_queue', false, false, false, false);

$data = implode(' ', array_slice($argv, 1));
if(empty($data)) $data = "Hello World!";
$msg = new AMQPMessage($data,
    array('delivery_mode' => 2) # make message persistent
);

$channel->basic_publish($msg, '', 'task_queue');

//echo " [x] Sent ", $data, "\n";

echo " [x] Sent 'Hello World!'\n";

$channel->close();
$connection->close();
