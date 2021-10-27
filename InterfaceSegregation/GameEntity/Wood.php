<?php declare(strict_types=1);

namespace MMBakker\SolidDesignPrinciples\InterfaceSegregation\GameEntity;

class Wood implements GameEntityInterface
{
    public function grow(): void
    {
        echo "Wood is growing\n";
    }

    public function attack(): void
    {
        echo "A tree cannot attack\n";
    }

    public function run(): void
    {
        echo "A tree cannot run\n";
    }
}
