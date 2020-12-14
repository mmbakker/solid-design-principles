<?php declare(strict_types=1);

namespace MMBakker\SolidDesignPrinciples\LiskovSubstitution;

/**
 * "LED"
 */
class LED
{
    public function printName(): void
    {
        echo 'I am an LED light, known as "LED-lamp" in Dutch.';
    }

    public function switchOn(): void
    {
        echo 'LED is now on.';
    }

    public function switchOff(): void
    {
        echo 'LED is now off.';
    }
}
