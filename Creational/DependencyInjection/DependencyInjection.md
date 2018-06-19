# Dependency Injection

Dependency injection is a design pattern which helps to reduce tight coupling because you inject into a class its collaborators.
It's when components are provided with dependencies through their constructors, methods, or directly in fields.

## When to use It

You need to use Dependency injection pattern when you want to create application with reusable, testable and decoupled code.
Many PHP frameworks (Symfony, Drupal 8) has instantiated in their core a dependency injection container to use immediately the dependency injection pattern.

Example

This is a class that doesn't use dependency injection pattern:

```
class Text 
{
    private $jsonParser;
    
    public function __construct()
    {
        $this->jsonParser = new JsonParser();
    }

}

```

Instantiating this class would go like this:

```
$text = new Text();
```

Very basic, but now let’s assume this text needs to work with a different collaborator.  
We would need to extend the class and overwrite the constructor. 

However, we would inject the collaborator into the text class like so:

```
class Text 
{
    private $parser;
    
    public function __construct($parser)
    {
        $this->parser = $parser;
    }

}

```

And instantiate it:

```
$jsonParser = new JsonParser();
$text = new Text($jsonParser);
```

In this way you can change parser without modify Text class, you have decoupled your code, make it more testable (because you can Mock parser class) and reusable because you are working with collaborators. 


