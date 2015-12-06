# Data Structure And Algorithm

This repo contains my exercises as self-learning process I do at home.
  - Folders are separated by programming language name: eg /php, /javascript,...

I have started taking real adventure from today: Sat Nov  7 22:09:25 ICT 2015


ATTENTION:
This repo requires:  
 - Phalcon Framework Extension: https://github.com/phalcon/cphalcon (for \Phalcon\Loader)
 

### Current Folder Structure:

```
php
├── Adventures
│   ├── DesignPatterns
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
│   ├── OOPCore
│   │   ├── ArrayObject
│   │   ├── Exception
│   │   └── Iterator
│   └── Services
│       ├── Autoload
│       ├── Debugging
│       │   └── Xdebug
│       │       ├── Debug
│       │       ├── Profile
│       │       └── Trace
│       ├── ErrorHandler
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
├── InterviewJorkes
├── ShellGames
└── Utilities

```




------------------

####php/Adventure/DesignPatterns: 
######*From the book: Head First Design Patterns - O'Reilly*
- Some of them are new, such as Dependency Injection, MVC
- Each pattern is written as final implement. To see result, run: php /DataStructureAndAlgorithm/php/index.php
- Reading this book is recommended, they explained where each pattern comes from and how to combine them together

------------------

####php/Adventure/Core: 
######*Currently this folder includes Object,Vector,Collection*
- Object class: should be inherit by all client classes later. To have convenient of playing with its data/property
- Vector class: refer to Vector class in Java. It's an Vector that hold objects. It provides a list of methods to play with object. 
- Collection class: a collection of Object in array

------------------

####php/BookPractises: 
*Book name: Cấu Trúc Dữ Liệu và Giải Thuật - tác giả Lê Minh Hoàng*

------------------

####php/InterviewJorkes: 
*For all 'jorke' tests from my interviews*

------------------

####php/ShellGames: 
*Used to make code generator, such as generate doc, generate files..., this file is also generated.*

------------------

####php/Utilities: 
*Contains classes with static methods to quickly give convenients of handling issues*

