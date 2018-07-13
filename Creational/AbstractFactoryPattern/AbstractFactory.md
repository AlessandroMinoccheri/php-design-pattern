# Abstract Factory Pattern

Abstract Factory Pattern defines what objects the non-abstract or concrete factory will need to be able to create.

The concrete factory must create the correct objects in its context, ensuring that all objects created by the concrete factory have been chosen to be able to work correctly for a given circumstance.

It provides an interface for creating families of related or dependent objects without specifying their concrete classes.

## When to use It

You need to use the Abstract Factory Pattern when you have some classes created, for example, with Factory Pattern, and you need to grow vertically adding more functionality not in parallel.

The purpose is to create a series of related or dependent objects without specifying their concrete classes.

This means that you have an abstract class with its abstract methods and its subclasses must implement those methods.

## Consequences

With Abstract Factory Pattern you can build more flexible creators, and the base creator class can provide a method that guarantees a default implementation of each subclass.

You can add or remove subclasses without consequences and you can decouple your system from the details of implementation.

 