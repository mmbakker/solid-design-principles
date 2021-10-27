# Interface segregation principle

In short:

> In the field of software engineering, the interface segregation principle states that no client should be forced to
> depend on methods it does not use.
>
> <sup><sub>[source](https://en.wikipedia.org/wiki/Interface_segregation_principle) </sub></sup>

## Assignment

Imagine a game that contains items (entities). Items vary from players to objects found throughout the game world. Now
imagine that these game entities share a common interface: the `GameEntityInterface`.

Having a shared interface means that our code doesn't have to know which concrete object it gets: it can just rely on
the functionality defined in the interface.

Look at the classes in this folder. The interface segregation principle has not been followed properly.

> ### Task 1
> Identify what change can be made to correctly follow the interface segregation principle. Make the change.

> ### Task 2
> Add an NPC (non-playable character) entity to the game. Does that change anything?

> ### Bonus task
> Give a player an inventory that accepts collectables. Make `Wood` a collectable and add a new collectable, `Rock`, for
> good measure.
