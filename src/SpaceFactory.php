<?php


namespace Src;


use Spaces\DirectSpace;
use Spaces\GroupSpace;

class SpaceFactory
{
    public function __construct(Space $space)
    {
        switch ($space->getType()) {
            case 'direct':
                return new DirectSpace();
            case 'group':
                return new GroupSpace();
            default:
                throw new \Exception('Space type not recognized');
        }
    }
}
