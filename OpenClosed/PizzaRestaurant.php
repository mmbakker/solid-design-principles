<?php declare(strict_types=1);

namespace MichielBakker\SolidDesignPrinciples\OpenClosed;

class PizzaRestaurant
{
    public function makePizza(string $type): Pizza
    {
        $pizza = new Pizza();

        switch ($type) {
            case 'vegetariana':
                $pizza->addTomato(new Tomato());
                $pizza->addMushroom(new Mushroom());
                $pizza->addArtichokeHeart(new ArtichokeHeart());
                $pizza->addOlive(new Olive());
                $pizza->addBellPepper(new BellPepper());
                $pizza->addCheese(new Cheese());
                $pizza->addOnion(new Onion());
                break;

            case 'funghi':
                $pizza->addTomato(new Tomato());
                $pizza->addMushroom(new Mushroom());
                $pizza->addCheese(new Cheese());
                break;

            case 'cipolla':
                $pizza->addTomato(new Tomato());
                $pizza->addOnion(new Onion());
                $pizza->addCheese(new Cheese());
                break;

            default:
                throw new \InvalidArgumentException('I need to know what type of pizza you want me to bake.');
        }

        printf("I created a pizza %s, which has %d grams of salt in it. Enjoy!\n", $type, $pizza->getGramsOfSalt());

        return $pizza;
    }
}
