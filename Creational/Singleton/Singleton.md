# Singleton

The singleton pattern (in many case is considered an anti-pattern) is a software design pattern that restricts the instantiation of a class to one object.
It often makes sense conceptually and architecturally to allow access to one and only one instance of a particular class

## When to use It

Singleton is useful when you need an object instantiate only once.

For example the object Preferences of an application should instantiate only one times in all over your class because in that object you store global information about your application.

When you have some global variables (please don't use It) you should take those global variables and put in a class and instantiate It with Singleton Pattern.

## Consequences

Singletons can be accessed from anywhere into your application so they can serve to create dependencies that can be hard to debug.
You create a dependency every time you declare that a method requires and argument of a particular type.
Singletons lets a programmer bypass the lines of communication defined by class interfaces.

When you use a Singleton, the dependency is hidden away inside a method and not declared in Its signature, so It's hard to understand the relationship within a system.

Singleton represent an improvement of global variables in OOP.

So please don't misuse Singletons, they are considered an anti-pattern because they are hard to debug in a system and hidden dependencies.

