# Single-responsibility principle

In short:

> Every module, class, or function in a computer program should have responsibility over _a single part_ of that
> program's functionality.
>
> <sup><sub>[source](https://en.wikipedia.org/wiki/Single-responsibility_principle) </sub></sup>

## Assignment

A car is made out of separate smaller parts. Two of these parts are wheels and the steering wheel.

> ### Task 1
> Note the two interfaces in this folder: `WheelInterface` and `SteeringWheelInterface`. Following the **single
> responsibility principle**, write a class that accepts objects implementing the `WheelInterface` and
> `SteeringWheelInterface` and constructs a new to be created object `Car`.
>
> Note: a car can have one steering wheel and no more than four wheels.
