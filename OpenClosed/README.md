# Open-closed principle

In short:

> In object-oriented programming, the open–closed principle states "software entities (classes, modules,
> functions, etc.) should be open for extension, but closed for modification"; that is, such an entity
> can allow its behaviour to be extended without modifying its source code. Every module, class, or
> function in a computer program should have responsibility over _a single part_ of that program's
> functionality.

## Assignment

Who doesn't like pizza?

Take a look at the classes in this folder. Note the [`PizzaRestaurant`](PizzaRestaurant.php) class, that
is responsible for making (baking!) `Pizza` instances. Pizzas are made by creating a base and adding
toppings to it.

Now take a look at the [`Pizza`](Pizza.php) class, which acts as the model of what a pizza is. As you
can see, a pizza can contain different toppings. You can also get the total grams of salt that is in a
pizza, by calling `Pizza->getGramsOfSalt()`.

> ### Question 1
> How can we apply the open-closed principle to improve the `Pizza` class and the toppings?

> ### Question 2
> How does this affect the `PizzaRestaurant` class?


