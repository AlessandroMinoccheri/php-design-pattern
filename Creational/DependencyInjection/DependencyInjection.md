# Dependency Injection

Dependency injection is a design pattern which helps to reduce tight coupling because you inject into a class its collaborators.
It's when components are provided with dependencies through their constructors, methods, or directly in fields.

## When to use It

You need to use Dependency injection pattern when you want to create application with reusable, testable and decoupled code.
Many PHP frameworks (Symfony, Drupal 8) has instantiated in their core a dependency injection container to use immediately the dependency injection pattern.

Example

This is a class that doesn't use dependency injection pattern:

```
class User 
{
    private $settings;
    
    public function __construct()
    {
        $this->settings = new Settings();
    }

}

```

Instantiating this class would go like this:

```
$user = new User();
```

Very basic, but now let’s assume this user needs to work with a different collaborator or different values of it.  
We would need to extend the class and overwrite the constructor. 

However, we would inject the collaborator into the user class like so:

```
class User 
{
    private $settings;
    
    public function __construct($settings)
    {
        $this->settings = $settings;
    }

}

```

And instantiate it:

```
$settings = new Settings();
$user = new User($settings);
```

In this way you can change Settings without modify User class, you have decoupled your code, make it more testable (because you can mock Settings class) and reusable because you are working with collaborators. 


