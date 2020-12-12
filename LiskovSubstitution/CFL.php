<?php declare(strict_types=1);

namespace MMBakker\LiskovSubstitution;

/**
 * "spaarlamp"
 */
class CFL
{
    public function printName(): void
    {
        echo 'I am a CFL light, known as "spaarlamp" in Dutch.';
    }

    public function switchOn(): void
    {
        echo 'CFL is now on.';
    }

    public function switchOff(): void
    {
        echo 'CFL is now off.';
    }
}
