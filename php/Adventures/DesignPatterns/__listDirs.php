<?php
return [
    'AdapterAndFacade' => [
        'Adapter' => [
            'TurKeyInterface',
            'WildTurkey',
            'TurkeyAdapter',
            'DuckInterface',
            'MallardDuck',
            'DogInterface',
            'DogAdapter',
            'BlackDog',
        ],
        'Facade' => [
            'HomeTheaterSystem' => [
                'Amplifer',
                'Tuner',
                'DvdPlayer',
                'CdPlayer',
                'Projector',
                'TheaterLights',
                'Screen',
                'PopcornPopper',
            ],
            'HomeTheaterFacade'
        ]
    ],
    'Command' => [
        'SimpleRemoteControl',
        'RealRemoteControl',
        'Core' => [
            'CommandInterface',
        ],
        'ExternalDevices' => [
            'Light',
            'GarageDoor',
            'Stereo',
            'CeilingFan',
        ],
        'ImplementedCommands' => [
            'Light' => [
                'LightOnCommand',
                'LightOffCommand',
            ],
            'GarageDoor' => [
                'GarageDoorOpenCommand',
                'GarageDoorCloseCommand',
            ],
            'Stereo' => [
                'StereoOnWithCDCommand',
                'StereoOffWithCDCommand',
            ],
            'CeilingFan' => [
                'CeillingFanCommandGeneral',
                'CeillingFanHightCommand',
                'CeillingFanMediumCommand',
                'CeillingFanLowCommand',
                'CeillingFanOffCommand',
            ],
            'NoCommand',
            'MacroCommand',
        ],

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
    'IteratorAndComposite' => [
        'Iterator' => [
            'MenuItem',
            'PancakeHouseMenu',
            'DinnerMenu',
            'Waitress',
            'DinnerMenuIterator',
        ],
        'Composite' => [
            'MenuComponentAbstract',
            'Menu',
        ],
    ],
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
    'TemplateMethod' => [
        'CaffeineBeverageAbstract',
        'Tea',
        'Coffee',
    ],
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