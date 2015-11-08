<?php
return [
    'AdapterAndFacade' => [],
    'Command' => [],
    'Decorator' => [],
    'Factory' => [],
    'IteratorAndComposite' => [],
    'Observer' => [
        'Observer' => [
            'Core' => [
                'Publisher',
                'ObserverInterface',
            ],
        ],
        'WeatherApp' => [
            'DisplayInterface',
            'DisplayImplement',
            'WeatherStationPublisher',
            'WeatherApp',
        ],
        'Events' => [
            'Manager'
        ],
    ],
    'Singleton' => [],
    'Strategy' => [],
    'State' => [],
    'Proxy' => [],
    'Compound' => [],

    'Mvc' => [
        'Flash' => [
            'Direct',
            'Session',
        ],
        'Session' => [
            'Adapter',
            'AdapterInterface'
        ],
        'Router',
        'Dispatcher',
        'Controller',
        'Model' => [
            'ManagerInterface',
            'Manager',
        ],
        'View' => [
            'Engine',
        ],
        'WebMethods' => [
            'Http' => [
                'RequestInterface',
                'Request',
                'ResponseInterface',
                'Response',
                'CookieInterface',
                'Cookie',
            ]
        ]
    ],
    //new
    'DependencyInjection' => [
        'DependencyInjector',
        'DependencyInjectorInterface',
        'FactoryDefault',
        'Injectable',
        'InjectableInterface',
        'Service',
        'ServiceInterface',
    ],

    //the leftovers patterns
    'LeftOvers' => [
        'Bridge' => [],
        'Builder' => [],
        'ChainOfResponsibility' => [],
        'FlyWeight' => [],
        'Interpreter' => [],
        'Mediator' => [],
        'Memento' => [],
        'Prototype' => [],
        'Visitor' => [],
    ],

];