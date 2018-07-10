# Decorator

Decorator pattern helps developers to modify the functionality of concrete components.  
The key to this pattern lies in the importance of composition at runtime.

## When to use it

We can use the Decorator pattern when we want to be able to apply new functionalities in a flexible way, enclosing the component to be decorated in another object responsible for adding functionality.

## Implementation

A decorator implements an operation so that it calls the same operation on the object to which it has a reference before (or after)
 performing its own actions.  
In this way it's possible to build a pipeline of Decorator objects at runtime.

## Consequences

Decorator pattern helps to keep the interface as sparse as possible, it improves code quality and make code more extendable.
