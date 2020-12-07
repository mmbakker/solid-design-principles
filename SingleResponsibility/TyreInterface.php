<?php declare(strict_types=1);

namespace MichielBakker\SingleResponsibility;

interface TyreInterface
{
    public function roll(int $amount): void;

    public function getWearAndTear(): int;
}
