<?php declare(strict_types=1);

namespace MichielBakker\SingleResponsibility;

interface SteeringWheelInterface
{
    public function left(int $amount): void;

    public function right(int $amount): void;

    public function center(): void;
}
