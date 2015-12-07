###Docs for IteratorAndComposite


######Iterator:
Provide a way to traverse a collection of objects without exposing the collection's implementation

######Composite:
Clients treat collection of objects as individual object individually


######Step by step implementation of Iterator
```
Each Menu (eg: Dinner, Breadfast, Lunch) 
    -> hold list of MenuItem instance
    -> implemented getIterator() method, which return the its Iterator

- Early: 
    The Waitress constructor handly add each Menu instance, then instantiate its Iterator, then call common printHelper() method

- Middle:
    The list of menu now gather to Vector. Mean I am using Iterator to wrap Iterator
    
- Now:
    We need implement submenu ??? wtf ---> Time of *Composite pattern*
    
```