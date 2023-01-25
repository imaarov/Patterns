# Iterator Pattern

## Behavioral Type  

### Use cases:
this pattern is used when the data structure is variable and you want to iterate through it, like when its can be fixed size array or list or ... 
and base on that iterate itself handle diffrently, then we use this pattern to hide the iterate from the user who just want iterate 

# Classes
- ConcreteIterator - contains methods for handle iterate on its way 
- ConcreteAggregate - contains data structure and createIteretor method  


# Interfaces
- Interface Iterator - contains hasNext and next methods

# Visual Diagram

## ConcreteIterator

| ConcreteIterator 
| ------
| -hasNext(): bool
| -next(): Object

## ConcreteAggregate

| ConcreteAggregate
| ------
| -createIterator: Iterator