<?php
return [
    'AdapterAndFacade' => [],
    'Command' => [
        'CommandInterface',
        'SimpleRemoteControl',
        'RealRemoteControl',
        //commands
        'NoCommand',
        'LightOnCommand',
        'LightOffCommand',
        'GarageDoorOpenCommand',
        'GarageDoorCloseCommand',
        'StereoOnWithCDCommand',
        'StereoOffWithCDCommand',
        'CeillingFanCommandGeneral',
        'CeillingFanHightCommand',
        'CeillingFanMediumCommand',
        'CeillingFanLowCommand',
        'CeillingFanOffCommand',
        //macros
        'MacroCommand',
        //remote apis
        'Light',
        'GarageDoor',
        'Stereo',
        'CeilingFan',

    ],
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
            'PizzaStoreFactoryAbstract',
            'IngredientFactoryInterface',
            'HaNoi' => [
                'HaNoiSpaggetiPizza',
                'HaNoiCheesePizza',
                'HaNoiIngredientFactory',
                'HaNoiPizzaStoreFactory',
            ],
            'HoChiMinh' => [
                'HoChiMinhSpaggetiPizza',
                'HoChiMinhCheesePizza',
                'HoChiMinhIngredientFactory',
                'HoChiMinhPizzaStoreFactory',
            ],
            'Ingredients' => [
                'TheImplements' => [
                    'Dough' => [
                        'Thin',
                        'Thick',
                    ],
                    'Saunce' => [
                        'PlumTomato',
                        'Marinara',
                    ],
                    'Clam' => [
                        'Fresh',
                        'Frozen',
                    ],
                    'Pepperoni' => [
                        'White',
                        'Black',
                    ],
                ],
                'DoughIngredientInterface',
                'SauceIngredientInterface',
                'ClamIngredientInterface',
                'PepperoniIngredientInterface',
            ],
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
    'Singleton' => [
        'EagerInstantiation' => [
            'SingleTon'
        ],
        'NonThreadSafe' => [
            'SingleTon',
        ],
        'SubClasses' => [
            'SingleTon',
            'Test1',
        ]
    ],
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