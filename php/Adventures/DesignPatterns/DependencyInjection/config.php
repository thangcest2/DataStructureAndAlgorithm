<?php
/**
 * CreatedBy: thangcest2@gmail.com
 * Date: 10/24/15
 * Time: 4:38 PM
 */

return [
    'services' => [
        'bootstrap'    => [
            'db',
            'dispatcher',
            'view',
            //..some else services
        ],
        'metaTag' => array(
            'className' => 'Frontend\Helper\MetaTagHelper',
            'sharedInstance' => true
        ),
        'routeHandler' => [
            'className' => 'Frontend\Listener\RouteHandler',
            'startup'   => true
        ],
    ],

    'routes'   => include __DIR__ . '/route.php',


];