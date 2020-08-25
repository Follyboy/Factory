<?php declare(strict_types=1);

namespace Test;

use Spaces\DirectSpace;
use Spaces\GroupSpace;
use Test\factories\DirectSpaceFactory;
use Test\factories\GroupSpaceFactory;
use PHPUnit\Framework\TestCase;


class factoryTest extends TestCase
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
