<?php declare(strict_types=1);

namespace Test\factories;

use Spaces\GroupSpace;
use Src\Space;

class GroupSpaceFactory implements SpaceFactory
{
    public function createSpace(): Space
    {
        return new GroupSpace();
    }
}