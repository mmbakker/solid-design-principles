<?php declare(strict_types=1);

namespace MMBakker\SolidDesignPrinciples\InterfaceSegregation;

use MMBakker\SolidDesignPrinciples\InterfaceSegregation\GameEntity\GameEntityInterface;
use MMBakker\SolidDesignPrinciples\InterfaceSegregation\GameEntity\Player;
use MMBakker\SolidDesignPrinciples\InterfaceSegregation\GameEntity\Wood;

class GameWorld
{
    /** @var array<GameEntityInterface> */
    private array $entities = [];

    public function __construct()
    {
        $this->entities[] = new Player();
        $this->entities[] = new Wood();
        $this->entities[] = new Wood();

        // have all entities grow and run.
        foreach ($this->entities as $entity) {
            $entity->grow();
            $entity->run();
        }
    }
}
