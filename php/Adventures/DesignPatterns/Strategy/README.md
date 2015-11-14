######Docs for Strategy:

- Defines a family of algorithms, encapsulates each one, and makes them interchangeable. 
- Strategy lets the algorithm vary independently from clients that use it

```
Strategy includes 2 parts: 
- Base object that have its behave: like Duck, must have to know Fly or Quack    
- Base behaviors for the base object: like FlyBehavior and QuackBehavior

- By default we don't know how Duck can 'quack' or 'fly'
- So we organize a list of Implemented Behaviors, later when a man use WoodDuck for example,
 he can set behavior for WoodDuck at runtime, or change it then if want  
```