# Visitor

In the Visitor pattern, one class calls a function in another class with the current instance of itself.  
The called class has special functions for each class that can call it.

## Implementation

Every ConcreteElement implements the Element interface by providing an acceptVisitor(), which simply calls the right callback, one of the visit() methods of the passed ConcreteVisitor.  
When an operation is added or changed, only the related ConcreteVisitor is affected.
If we simply use ordinary methods instead of Visitors, every new operation defined by Element must be implemented in all ConcreteElement classes, either manually or through an abstract class with a default implementation where applicable.  
In some use cases, this may not even be possible, for example when you want to plug in different operations (Visitor objects) without modifying the existing codebase (it's the case with extensions and plugins.)
Although the Visitor is an external object, the Api of this pattern is still readable as a clear extension point, acceptVisitor(), is provided.

## Advantages

Mainly, there are no dependencies from the elements towards the Visitors.  
Also the addition of operations (other visitors) do not require changes to the elements, in accordance with the Open/Closed Principle.  
The Visitor pattern is helpful in concentrating operation-specific code, instead of spreading it all over the ConcreteElements. Operation-specific data structures reside in the Visitor instead of in the ConcreteElements.  

At the same time, there is no clutter in the ConcreteElement classes with many methods on each of them. The ConcreteVisitors take care of the methods and integrate them in the same class following a trasversal line.  

## Disadvantages

There are many changes introduced in the Visitor hierarchy when an Element is added: a new visit() method must be implemented by all Visitors. Moreover, the Api is not complete when you read the code of a ConcreteElement class, since a Visitor can do anything. This can be an hindrance when trying to understanding what code can do.
