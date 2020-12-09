<?php declare(strict_types=1);

namespace MichielBakker\SolidDesignPrinciples\SingleResponsibility;

interface TyreInterface
{
    public function roll(int $amount): void;

    public function getWearAndTear(): int;
}
