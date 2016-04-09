<?php
/**
 * CreatedBy: thangcest2@gmail.com
 * Date: 3/5/16
 * Time: 9:25 AM
 */

require_once __DIR__ . '/../../../../vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('hello', false, false, false, false);

echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";

$callback = function($msg) {
    /**
     * @var $msg \PhpAmqpLib\Message\AMQPMessage
     */
    echo " [x] Received ", $msg->body, "\n";
};

$channel->basic_consume('hello', '', false, true, false, false, $callback);

while(count($channel->callbacks)) {
    $channel->wait();
}