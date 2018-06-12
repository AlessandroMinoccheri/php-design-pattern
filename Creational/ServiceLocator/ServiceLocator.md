# Service Locator

Service Locator is considered an anti-pattern for many developers.   
It violates the Dependency Inversion principle.  
Service Locator hides class' dependencies instead of exposing them as you would do using the Dependency Injection.

## When you can use it

Service Locator pattern it can be used when you need to create object with some dependency and you want to maintain code simpler, though it embeds your components into a wider system.

## Consequences

Service Locator can be more hard to test and a hard-coded call to a service locator makes a component dependent upon it because the call is made from within the body of a method.