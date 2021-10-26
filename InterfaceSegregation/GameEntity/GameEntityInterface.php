<?php declare(strict_types=1);

namespace MMBakker\SolidDesignPrinciples\InterfaceSegregation\GameEntity;

interface GameEntityInterface
{
    /**
     * Increases the size of the game entity.
     */
    public function grow(): void;

    /**
     * Makes the game entity perform an attack.
     */
    public function attack(): void;

    /**
     * Makes the game entity run.
     */
    public function run(): void;
}
