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
    'Bridge' => [],
    'Builder' => [],
    'ChainOfResponsibility' => [],
    'FlyWeight' => [],
    //the leftovers patterns
    'Interpreter' => [],
    'Mediator' => [],
    'Memento' => [],
    'Prototype' => [],
    'Visitor' => [],
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
];