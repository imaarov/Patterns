# Command Pattern

## Behavioral Type  

### Use cases:
in command pattern the request is send to the invoker and invoker pass it to the command object , command object pass it to the proper method of receiver to perform the action, the client can create new receiver and attach it to the command.

# Classes
- Invoker - responsible for initiating requests + reference to command object + trigger command
- ConcreteCommand - A concrete command isnt supposedto perrform the work on its own, but rather to pass the call to on of the business logic objects
- Receiver - contain some business logic 
- Client - create command object and configure concrete command objects

# Interface
- Command - declare single method for taking action that is execute + some times come with undo


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
