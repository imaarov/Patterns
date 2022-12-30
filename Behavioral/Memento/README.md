# Memento Pattern

## Behavioral Type  

### Use cases:
this pattern is used to manages state for using current state or the previous states in program.

# Classes
- Memento - contains state of an object
- Originator - create/store objects
- Caretaker - restore object from memento

# Visual Diagram

## Originator

| Originator 
| ------
| -state: string
| -setState() :void
| -getState() : string
| -saveStateToMemento(): Memento
| -getStateFromMemento

## Memento

| Memento 
| ------
| -state: string
| -getState() : string

## Caretaker

| Caretaker
| ------
| -mementoList
| array List
| -add() : void
| -get() : array
