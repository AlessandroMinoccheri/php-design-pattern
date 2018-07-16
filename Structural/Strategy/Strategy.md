# Strategy

With the Strategy pattern you can encapsulate families of specific algorithms, making sure that the class responsible for creating a particular algorithm does not know the true implementation. 

## When to use it

The strategy pattern is a good solution for those cases in which you need the software to select which code alternative to implement at runtime.

## Implementation

There many methods to implement this pattern, for example:  
you can create an interface that will be used by all of the classes for your problem.  
Once you have written the interface, you can write the classes that implement the interface.
Also, you need to write specific class to generate and use ypur class created before.

## Consequences

We should consider the use of the Strategy design pattern in those cases where we want to choose which object to create from several similar classes during the runtime of the software.  
The classes are similar in that they can use the same name for their methods, but they are different in the way that they apply the methods.  
Therefore, the Strategy pattern uses an interface that the classes can implement.  
One of the disadvantages of this pattern is that the client will be forced to know the strategies