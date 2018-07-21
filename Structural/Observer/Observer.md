# Observer

Observer pattern defines a one-to-many dependency between objects so that when one object changes state, all of its dependents are notified and updated
automatically.

## When to use it

You can use Observer pattern when you want to notify a subject when its state has changed for example.

## Implementation

Usually you have an observer class that provided  method update().
Than you have a subject class that implements: attach(), detach() and notify() methods

When the subject changes it calls the observer's update method with itself. The observer can then take the subject and use whatever methods have been made available for it to determine the subjects current state

