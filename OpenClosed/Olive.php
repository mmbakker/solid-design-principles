<?php declare(strict_types=1);

namespace MMBakker\SolidDesignPrinciples\OpenClosed;

class Olive
{
    private int $calories = 20;
    private string $color = 'black';
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
