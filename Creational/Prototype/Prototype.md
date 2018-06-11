# Prototype

The prototype pattern create one standard object for each class, and clone that object to create new instances.  
When an object is cloned the constructor is not re-executed.  
Constructors should not deal with any business logic other than maybe setting some variables.  
So this should not be a problem anyway, but if you’re working on a legacy code base, this is worth taking into consideration.

## When to use It

You can use Prototype pattern when you have an application "hard wires" the class of object to create in each "new" expression.
So it's very useful when you have many classes with a parallel inheritance, prototype pattern promotes flexibility and reduces the number of classes you must create using composition instead of inheritance. 

## Advantages

The time taken to clone an object is quicker than it would be to initialise a new object.  
This is because when an object is cloned the constructor is not re-executed.