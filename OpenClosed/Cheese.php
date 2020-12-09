<?php declare(strict_types=1);

namespace MichielBakker\SolidDesignPrinciples\OpenClosed;

class Cheese
{
    private int $calories = 50;
    private string $color = 'yellow';
    private int $gramsOfSalt = 1;

    public function getCalories(): int
    {
        return $this->calories;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getGramsOfSalt(): int
    {
        return $this->gramsOfSalt;
    }
}
