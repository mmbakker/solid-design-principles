# Interface segregation principle

In short:

> In the field of software engineering, the interface-segregation principle (ISP) states that no client should be forced
> to depend on methods it does not use.
>
> <sup><sub>[source](https://en.wikipedia.org/wiki/Interface_segregation_principle) </sub></sup>

## Assignment




In real life, a lot of objects or items belong to the same group, while they are themselves different from each other.
Apples, bananas, and oranges are all fruits. Cats, dogs, and cows are all mammals. You get the idea.

Look at the classes in this folder. They're all about light and electricity.

The `Socket` class represents a light socket that you can screw a light source into. Note that, to the socket, it
doesn't matter what kind of light is screwed into it: as long as the socket is powered on and it contains a light
source, it will forward that power into it.

> ### Task 1
> Assuming all sockets have the same size, apply **Liskov's substitution principle** to complete the code and get the
> socket to work.
>
> Remember that the socket is indifferent to _types_ of lighting: as long as it contains a light, it will forward it.

> ### Task 2 (bonus points)
> A socket can have two states: _powered on_ and _powered off_. Make the socket _stateful_, meaning it remembers its
> state for as long as the program runs.
