# Registry

Registry pattern is a powerful way of breaking out the constraints laid down by layering.  
It's all about providing system-wide access to objects.


## Implementation

A registry is simply a class that provides access to data via static methods.  
Every object in a system, therefore, has access to these objects.
You can store instance or create with factory your class and store it into a registry class and you can use those class everywhere.

## Consequences

Registry objects make their data globally available. This means that any class that acts as a client for a registry will exhibit a dependency that isn't declared in its interface.  
This can become a serious problem if you beginto rely on Registry objects for lots of the data in your system.  
Registry objects are best used sparingly, for a well-defined set of data items.


