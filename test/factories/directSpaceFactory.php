<?php declare(strict_types=1);

namespace Test\factories;

use Spaces\DirectSpace;
use Src\Space;


class DirectSpaceFactory implements SpaceFactory
{
    public function createSpace(): Space
    {
        return new DirectSpace();
    }
}