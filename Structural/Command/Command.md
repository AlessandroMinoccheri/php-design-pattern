# Command

The command pattern is a behavioral design pattern in which an object is used to represent and encapsulate all the information needed to call a method at a later time.  
This information includes the method name, the object that owns the method and values for the method parameters.

## Implementation

To implement Command pattern first you need to create an interface (or sometimes an abstract class) called Command for example which expose a public method execute.  
After there are up to three partecipants: the client, which instantiates the command object; the invoker, which deploys the object; and the receiver omn which the command operates.  

