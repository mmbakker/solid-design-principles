<?php declare(strict_types=1);

namespace MMBakker\SolidDesignPrinciples\InterfaceSegregation\GameEntity;

class Player implements GameEntityInterface
{
    public function grow(): void
    {
        echo "Player is growing\n";
    }

    public function attack(): void
    {
        echo "Player is attacking\n";
    }

    public function run(): void
    {
        echo "Player is running\n";
    }
}
