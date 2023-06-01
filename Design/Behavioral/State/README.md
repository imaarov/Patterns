# State Pattern

## Behavioral Type  

### Use cases:
this pattern is used when an object change its behavior based on its internal state.

# Classes
- Context - main class that receive the request
- State   - the class that gonna give that request to proper class 
- ConcreteState - class that take action on request diffrently from another concretestate class

# Interfaces
- Interface State - contains handle methods


# Visual Diagram

## Context

| Context 
| ------
| +request()

## State

| State
| ------
| -handle()

## ConcreteStates-A

| ConcreteStateA
| ------
| -handle()

## ConcreteStates-B

| ConcreteStateB
| ------
| -handle()
