###Docs for Observer

- Defines a one-to-many dependency between Publisher and Observers
- So that when one Publisher changes state, all its Observers are notify and update automatically 

```
Observer includes 2 parts:
- Publisher: hold all observers and make logic, then make notify jobs  
- Observers: who register to and wait for info from Publisher's events.

```