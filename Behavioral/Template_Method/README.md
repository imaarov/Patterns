# Template Method Pattern

## Behavioral Type  

### Use cases:
this pattern is used when we have an algorithm or set of tasks that its use in multiple class and some of the step of this tasks/algorithms is identical and some of it not.

# Classes
- ConcreteClass - class that extend the abstract class and implement some methods that should do 

# Abstract Classes
- AbstractClass - abstract class that include all methods of tasks and algorithm


# Visual Diagram

## AbstractClass

| AbstractClass
| ------
| templateMethod()
| primitiveOperation1()
| primitiveOperation2()

## ConcreteClass

| ConcreteClass
| ------
| primitiveOperation1()
| primitiveOperation2()
