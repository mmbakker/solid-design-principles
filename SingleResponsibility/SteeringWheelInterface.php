<?php declare(strict_types=1);

namespace MMBakker\SolidDesignPrinciples\SingleResponsibility;

interface SteeringWheelInterface
{
    public function left(int $amount): void;

    public function right(int $amount): void;

    public function center(): void;
}
