<?php declare(strict_types=1);

namespace MMBakker\SolidDesignPrinciples\SingleResponsibility;

interface WheelInterface
{
    public function roll(int $amount): void;

    public function getWearAndTear(): int;
}
