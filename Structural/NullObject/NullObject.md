# Null Object

The Null Object pattern provides a way for making a null value and a real object indistinguishable by making them support the same method calls.

## When to use it

You can use the Null Object pattern when your method is breaking its contract.  
If it has committed to return an object with a certain method, then returning null forces the client code to adjust to unexpected circumstances.


## Implementation

The Null Object pattern allows developers to delegate the doing of nothing to a class of an expected type.  
You can create a new class that respects an interface, but does precisely nothing.

```
class NullUser extends User
{
    public function getName() :string
    {
        return '';
    }
    
    public function getEmail() :string
    {
        return '';
    }
}
```


