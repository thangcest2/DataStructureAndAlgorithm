# PHP Design Patterns + Data Structure And Algorithm

Welcome ;)

### This repo is aim for 2 parts:
- A library of core stuffs for PHP, such as concept/core of design patterns, that go across every frameworks
- Practises/relax codes
- If something I goes wrong, I hope some people can really join or indicates me what's incorrect


### Note:
This repo requires:  
 - Phalcon Framework Extension: https://github.com/phalcon/cphalcon (for \Phalcon\Loader)
 
 
 
------------------

### Short Introdution:

####php/Adventure/DesignPatterns: All design patterns in PHP
######*From the book: Head First Design Patterns - O'Reilly*
- Some of them are new, such as Dependency Injection, MVC
- Each pattern is written as final implement. To see result, run: php /DataStructureAndAlgorithm/php/index.php
- Reading this book is recommended, they explained where each pattern comes from and how to combine them together

- To run and see design pattern implemented result:
`php /path/to/php/index.php`

------------------

####php/Adventure/Core: 
######*Currently this folder includes Object,Vector,Collection...*
- Object class: should be inherit by all client classes later. To have convenient of playing with its data/property
- Vector class: refer to Vector class in Java. It's an Vector that hold objects. It provides a list of methods to play with object. 
- Collection class: a collection of Object in array

------------------

####php/Adventure/Services: 
*The common services/technologies for high level web development*

------------------

####php/BookPractises: 
*Book name: Cấu Trúc Dữ Liệu và Giải Thuật - tác giả Lê Minh Hoàng*

- To see results, just run file, eg: `php /path/to/file`

------------------

####php/NiceMaths: 
*Code for some exciting maths, including maths I have been done*
- To see results, just run file, eg: `php /path/to/file`

------------------

####php/ShellGames: 
*Used to make code generator, such as generate doc, generate files..., this file is also generated.*
- To generate folder (when you can imagined what folder/file you are intending to create):

`Create folder/file array of keys=>values in __listDirs.php file`

--> run
 
`php /path/to/php/ShellGames/generateFolder $argv1 $argv2`

`$argv1: /path/to/__listDirs.php`
 
`$argv2: =1 to generate passive header docs template for all php files under current folder`

------------------

####php/Utilities: 
*Contains classes with static methods to quickly give convenients of handling issues*



------------------

# Current Folder Structure:
```
php
├── ###Adventures
│   ├── ######DesignPatterns
│   │   ├── AdapterAndFacade
│   │   │   ├── Adapter
│   │   │   └── Facade
│   │   │       └── HomeTheaterSystem
│   │   ├── Command
│   │   │   ├── Core
│   │   │   ├── ExternalDevices
│   │   │   └── ImplementedCommands
│   │   │       ├── CeilingFan
│   │   │       ├── GarageDoor
│   │   │       ├── Light
│   │   │       └── Stereo
│   │   ├── Compound
│   │   ├── Decorator
│   │   │   ├── FileSystem
│   │   │   │   ├── InputAbstracts
│   │   │   │   ├── InputStreams
│   │   │   │   └── StreamDecorators
│   │   │   └── StarbuzzCoffee
│   │   │       ├── TheAbstracts
│   │   │       ├── TheCondiments
│   │   │       └── TheDrinks
│   │   ├── DependencyInjection
│   │   ├── Factory
│   │   │   ├── Core
│   │   │   └── PizzaStore
│   │   │       ├── HaNoi
│   │   │       ├── HoChiMinh
│   │   │       └── Ingredients
│   │   │           └── TheImplements
│   │   │               ├── Clam
│   │   │               ├── Dough
│   │   │               ├── Pepperoni
│   │   │               └── Saunce
│   │   ├── IteratorAndComposite
│   │   │   ├── Composite
│   │   │   └── Iterator
│   │   ├── LeftOvers
│   │   │   ├── Bridge
│   │   │   ├── Builder
│   │   │   ├── ChainOfResponsibility
│   │   │   ├── FlyWeight
│   │   │   ├── Interpreter
│   │   │   ├── Mediator
│   │   │   ├── Memento
│   │   │   ├── Prototype
│   │   │   └── Visitor
│   │   ├── Mvc
│   │   │   ├── Flash
│   │   │   ├── Model
│   │   │   ├── Session
│   │   │   ├── View
│   │   │   └── WebMethods
│   │   │       └── Http
│   │   ├── Observer
│   │   │   ├── EventManagerPhalcon
│   │   │   ├── Events
│   │   │   ├── Observer
│   │   │   │   └── Core
│   │   │   └── WeatherApp
│   │   ├── Proxy
│   │   ├── Singleton
│   │   │   ├── EagerInstantiation
│   │   │   ├── NonThreadSafe
│   │   │   └── SubClasses
│   │   ├── State
│   │   ├── Strategy
│   │   └── TemplateMethod
│   ├── ######OOPCore
│   │   ├── ArrayObject
│   │   ├── Exception
│   │   │   └── Stack
│   │   └── Iterator
│   └── ######Services
│       ├── Autoload
│       ├── Debugging
│       │   └── Xdebug
│       │       ├── Debug
│       │       ├── Profile
│       │       └── Trace
│       ├── Logging
│       ├── MessageBroker
│       │   └── RabbitMQ
│       ├── Performance
│       │   ├── Compressed
│       │   ├── Memcached
│       │   ├── MongoDB
│       │   └── Redis
│       ├── Searching
│       │   ├── ElasticSearch
│       │   └── Solr
│       └── Task
│           ├── Beanstalk
│           ├── Gearman
│           └── RabbitMQ
├── BookPractises
├── NiceMaths
├── ShellGames
├── Utilities
└── vendor
    ├── composer
    └── php-amqplib
        └── php-amqplib
            ├── PhpAmqpLib
            │   ├── Channel
            │   ├── Connection
            │   ├── Exception
            │   ├── Helper
            │   │   └── Protocol
            │   ├── Message
            │   └── Wire
            │       └── IO
            └── spec

```



### Thanks.
