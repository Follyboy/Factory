<?php declare(strict_types=1);

namespace Factory\src;
namespace Factory\test\factories;

use Factory\src\Space;

interface SpaceFactory
{
    public function createSpace(): Space;
}