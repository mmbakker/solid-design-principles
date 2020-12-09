<?php declare(strict_types=1);

namespace MichielBakker\SolidDesignPrinciples\OpenClosed;

class Onion
{
    private int $calories = 20;
    private string $color = 'black';

    public function getCalories(): int
    {
        return $this->calories;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
