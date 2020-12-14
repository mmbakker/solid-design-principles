<?php declare(strict_types=1);

namespace MMBakker\SolidDesignPrinciples\LiskovSubstitution;

class Socket
{
    public function powerOn(): void
    {
        // powering something
    }

    public function powerOff(): void
    {
        // removing power
    }
}
