<?php declare(strict_types=1);

namespace Factory\src;
namespace Factory\spaces;
namespace Factory\test;
namespace Factory\test\factories;

use Factory\src\DirectSpace;
use Factory\src\GroupSpace;
use PHPUnit\Framework\TestCase;


class FactoryTest extends TestCase
{
    public function testCanCreateDirectSpace()
    {
        $loggerFactory = new DirectSpaceFactory();
        $logger = $loggerFactory->createSpace();

        $this->assertInstanceOf(DirectSpace::class, $logger);
    }

    public function testCanCreateGroupSpace()
    {
        $loggerFactory = new GroupSpaceFactory();
        $logger = $loggerFactory->createSpace();

        $this->assertInstanceOf(GroupSpace::class, $logger);
    }
}

