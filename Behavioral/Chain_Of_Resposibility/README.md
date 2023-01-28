# Command Pattern

## Behavioral Type  

### Use cases:
behavioral design pattern that lets
you pass requests along a chain of handlers. Upon receiving a
request, each handler decides either to process the request or
to pass it to the next handler in the chain.

# Classes
- BaseHandler - implements the Handler interface and include handle and next methods
- ConcreteHandlers - include handle method to handle request on its own way

# Interface
- Handler - include setNext and Handle methods for concrete classes

# lifecycle
![Visual Diagram Command Pattern](img/chainOfAction.png)

image by [refactoring guru](https://refactoring.guru)

# Visual Diagram
![Visual Diagram Command Pattern](img/chainOfResponsibility.png)

image by [refactoring guru](https://refactoring.guru)
