# Docs for State:

### The State Pattern allows a holder object to alter it's behavior when its intenal state change.
The object will appear to change its class.

Delegation to decide which behavior to use.

### You can see it's quite similar with Strategy Pattern. But hold on:
- In State, there is a holder object which encapsulate a set of behaviors.
The client suppose to know about only this object. The object itself know 
where to delegate the request according to.
Good to use when holder object has sequential states and lot of conditionals in context.

- In Strategy, the client needs to know which behavior need to pass.
Allow client to switch behavior at runtime.
Allow subclass to implement steps in an algorithm.

    