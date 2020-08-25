<?php declare(strict_types=1);

namespace Test\factories;

use Src\Space;

interface SpaceFactory
{
    public function createSpace(): Space;
}