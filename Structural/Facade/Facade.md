# Facade

The Facade pattern is a way of providing simple, clear interface to complex systems.

## When to use it

Sometimes it's not always clear which parts of a system are designed to be used by client code and which are best hidden.  
Typically, you have many tiers responsible each of a part of your system: logic, database...  
You should aspire to keep those tiers independent, so that a change in one area of your project will have minimal repercussion elsewhere.  
If code from one tier is tightly integrated into another is very hard to obtain your objective. 
Facade pattern helps us for this problem.  

## Implementation

Typically you have an oriented object system where every class expose method to the client.  
So if you need to build an object you need to call many other objects and methods so if you change a thing you need to search in every class and methods were to make an implementation.  
With Facade pattern you have a single point entry where into this class you build your object so if there is an error or a new implementation you can work only there where you build your object with others.

## Consequences

A Facade pattern is a very really simple concept. It's just matter of creating a single point of entry for a tier or subsystem.  
It helps to decouple distinct areas in a project from one another.  
It's useful and convenient for client coders have access to simple methods that achieve clear ends (high method level).  
It reduces errors by focusing the use of a subsystem in one place.  
Errors are also minimized in complex subsystems where client code might otherwise use internal functions incorrectly.  
Sometimes developers use Facade pattern without recognizing it for its simple implementation and use.
It's also used to create object wrappers that encapsulate blocks of procedural code.  
