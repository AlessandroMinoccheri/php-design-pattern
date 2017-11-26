# Factory Method

The factory method solve the problem of how to create object instances when your code focuses on abstract types.

## When to use It

You can use Factory method when for example you have a shop and many type of different products that share same method and have some customization.
For example you have a class Shop and two different nation managed: Italy and USA.

Both Italy class Usa class have a currency: getCurrency so you need to implement It in both classes, those classes are child of Its factory that is an abstract class that defines methods.

Factory method solves some problem:

* You can know which kind of finance nation object you are using in every part of your code
* You can add types with relative ease
* You can have customization for each subclasses in a clear mode

The Factory method pattern enables you to use inheritance and polymorphism to encapsulate the creation of concrete subclasses.      

## Consequences

A common consequence of the Factory method pattern is the creator classes mirror the subclasses hierarchy and there is duplicated code.

Another issue could be the creation of unnecessary subclasses.

The Factory method pattern is often used with the Abstract Factory Pattern. 