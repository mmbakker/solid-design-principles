<?php declare(strict_types=1);

namespace MichielBakker\SolidDesignPrinciples\OpenClosed;

class ArtichokeHeart
{
    private int $calories = 1;
    private string $color = 'green';

    public function getCalories(): int
    {
        return $this->calories;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
