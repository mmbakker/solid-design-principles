<?php declare(strict_types=1);

namespace MichielBakker\SolidDesignPrinciples\OpenClosed;

class Pizza
{
    private int $gramsOfSalt = 5;

    private ?ArtichokeHeart $artichokeHeart = null;
    private ?BellPepper $bellPepper = null;
    private ?Cheese $cheese = null;
    private ?Mushroom $mushroom = null;
    private ?Olive $olive = null;
    private ?Onion $onion = null;
    private ?Tomato $tomato = null;

    public function getGramsOfSalt(): int
    {
        $gramsOfSaltFromToppings = 0;

        if ($this->artichokeHeart !== null && method_exists($this->artichokeHeart, 'getGramsOfSalt')) {
            $gramsOfSaltFromToppings += $this->artichokeHeart->getGramsOfSalt();
        }

        if ($this->bellPepper !== null && method_exists($this->bellPepper, 'getGramsOfSalt')) {
            $gramsOfSaltFromToppings += $this->bellPepper->getGramsOfSalt();
        }

        if ($this->cheese !== null && method_exists($this->cheese, 'getGramsOfSalt')) {
            $gramsOfSaltFromToppings += $this->cheese->getGramsOfSalt();
        }

        if ($this->mushroom !== null && method_exists($this->mushroom, 'getGramsOfSalt')) {
            $gramsOfSaltFromToppings += $this->mushroom->getGramsOfSalt();
        }

        if ($this->olive !== null && method_exists($this->olive, 'getGramsOfSalt')) {
            $gramsOfSaltFromToppings += $this->olive->getGramsOfSalt();
        }

        if ($this->onion !== null && method_exists($this->onion, 'getGramsOfSalt')) {
            $gramsOfSaltFromToppings += $this->onion->getGramsOfSalt();
        }

        if ($this->tomato !== null && method_exists($this->tomato, 'getGramsOfSalt')) {
            $gramsOfSaltFromToppings += $this->tomato->getGramsOfSalt();
        }

        return $this->gramsOfSalt + $gramsOfSaltFromToppings;
    }

    public function addArtichokeHeart(ArtichokeHeart $artichokeHeart): void
    {
        $this->artichokeHeart = $artichokeHeart;
    }

    public function addBellPepper(BellPepper $bellPepper): void
    {
        $this->bellPepper = $bellPepper;
    }

    public function addCheese(Cheese $cheese): void
    {
        $this->cheese = $cheese;
    }

    public function addMushroom(Mushroom $mushroom): void
    {
        $this->mushroom = $mushroom;
    }

    public function addOlive(Olive $olive): void
    {
        $this->olive = $olive;
    }

    public function addOnion(Onion $onion): void
    {
        $this->onion = $onion;
    }

    public function addTomato(Tomato $tomato): void
    {
        $this->tomato = $tomato;
    }
}
