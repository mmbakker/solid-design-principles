<?php declare(strict_types=1);

namespace MMBakker\SolidDesignPrinciples\OpenClosed;

class Mushroom
{
    private int $calories = 1;
    private string $color = 'white';

    public function getCalories(): int
    {
        return $this->calories;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
