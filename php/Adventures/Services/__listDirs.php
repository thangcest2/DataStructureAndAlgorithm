<?php
/**
 * CreatedBy: thangcest2@gmail.com
 * Date: 10/19/15
 * Time: 10:11 AM
 */

return [
    'Performance' => [
        'Memcached' => [],
        'MongoDB' => [],
        'Redis' => [],
        'Compressed' => [],
    ],
    'Searching' => [
        'Solr' => ['index'],
        'ElasticSearch' => [
            
        ],
    ],
    'MessageBroker' => [
        'Gearman' => [],
        'RabbitMQ' => [],
        'Beanstalk' => [],
    ],
    'Debugging' => [
        'Xdebug' => [
            'Debug' => [],
            'Profiler' => [],
            'Trace' => [],
        ],
    ],
    'Logging' => [
        'Monolog' => [],
        'Loggy' => [],
    ],

];