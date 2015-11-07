<?php
/**
 * CreatedBy: thang.tran@tiki.vn
 * Date: 10/19/15
 * Time: 10:11 AM
 */

return [
    'Autoload' => [],
    'Performance' => [
        'Memcached' => [],
        'MongoDB' => [],
        'Redis' => [],
        'Compressed' => [],
    ],
    'Searching' => [
        'Solr' => ['index.php'],
        'ElasticSearch' => [],
    ],
    'Task' => [
        'Gearman' => [],
        'RabbitMQ' => [],
        'Beanstalk' => [],
    ],
    'Debugging' => [
        'Xdebug' => [
            'Debug' => [],
            'Profile' => [],
            'Trace' => [],
        ],
    ]

];