# Composite

Composite pattern is an extreme example of inheritance deployed in the service of composition.  
It's so neat that you might be tempted to overuse it.

## When to use it

This pattern is very useful when you want to treat a group of objects the same way as a single instance of the object.
It defines a single inheritance hierarchy that lays down two distinct sets of responsibilities.  

## Advantages

Composite pattern has many advantages:

* Flexibility: everything shares a common supertype, so it's easy to add new composite ore another leaf.

* Simplicity: there is no need for the client to understand if an object is a leaf or not.

* Implicit reach: objects are organized in a tree so each of it holds reference to its children.

* Explicit reach: tree structure is easy to traverse. They can be iterated in order to gain information or to perform transformations.

## Consequences

The Composite pattern principle that leaf classes have the same interface as composites is upheld, and this is not helpful because you don't know how safe you might be calling some functions.
When we introduce complex rules, the code can becomes hard to manage.