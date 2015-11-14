<?php
return [
    'AdapterAndFacade' => [],
    'Command' => [],
    'Decorator' => [
        'FileSystem' => [
            'InputAbstracts' => [
                'InputStreamAbstract',
                'FilterInputStreamAbstract',
            ],
            'StreamDecorators' => [
                'FilterBufferredInput',
                'FilterLineNumberInput',
            ],
            'InputStreams' => [
                'FileInputStream',
                'StringBufferInputStream',
                'BypeArrayInputStream',
            ]
        ],
        'StarbuzzCoffee' => [
            'TheAbstracts' => [
                'BeverageAbstract',
                'CondimentDecoratorAbstract',
            ],
            'TheCondiments' => [
                'SoyCondiment',
                'MochaCondiment',
                'WhipCondiment',
            ],
            'TheDrinks' => [
                'ExpressoBeverage',
                'CapuchinoBeverage',
                'HouseBlendBeverage',
            ]
        ]
    ],
    'Factory' => [
        'PizzaStore' => [
            'PizzaAbstract',
            'HaNoi' => [
                'HaNoiSpaggetiPizza',
                'HaNoiCheesePizza',
            ],
            'HoChiMinh' => [
                'HoChiMinhSpaggetiPizza',
                'HoChiMinhCheesePizza',
            ]
        ]
    ],
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
            'Event',
            'Manager',
            'EventsAwareInterface',
            'ManagerInterface',
        ]
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