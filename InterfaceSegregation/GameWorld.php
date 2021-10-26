<?php declare(strict_types=1);

namespace MMBakker\SolidDesignPrinciples\InterfaceSegregation;

use MMBakker\SolidDesignPrinciples\InterfaceSegregation\GameEntity\GameEntityInterface;
use MMBakker\SolidDesignPrinciples\InterfaceSegregation\GameEntity\PlayerCharacter;
use MMBakker\SolidDesignPrinciples\InterfaceSegregation\GameEntity\Tree;

class GameWorld
{
    /** @var array<GameEntityInterface> */
    private array $entities = [];

    public function __construct()
    {
        $this->entities[] = new PlayerCharacter();
        $this->entities[] = new Tree();
        $this->entities[] = new Tree();

        // have all entities grow and run.
        foreach ($this->entities as $entity) {
            $entity->grow();
            $entity->run();
        }
    }
}
