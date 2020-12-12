<?php declare(strict_types=1);

namespace MMBakker\LiskovSubstitution;

/**
 * "gloeilamp"
 */
class Incandescent
{
    public function printName(): void
    {
        echo 'I am an incandescent light, known as "gloeilamp" in Dutch.';
    }

    public function switchOn(): void
    {
        echo 'Incandescent is now on.';
    }

    public function switchOff(): void
    {
        echo 'Incandescent is now off.';
    }
}
