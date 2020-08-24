<?php declare(strict_types=1);

namespace Factory\src;
namespace Factory\spaces;
namespace Factory\test\factories;

use Factory\src\Space;
use Factory\src\GroupSpace;

class GroupSpaceFactory implements SpaceFactory
{
    public function createSpace(): Space
    {
        return new GroupSpace();
    }
}