<?php


namespace Src;


use Spaces\DirectSpace;
use Spaces\GroupSpace;

class SpaceFactory
{
    public function __construct()
    {
    }

    public function newSpace(array $data, $roles = null)
    {
        switch ($data['type']) {
            case 'direct':
                return new DirectSpace($data);
            case 'group':
                return new GroupSpace($data);
            default:
                throw new \Exception('Space type not recognized');
        }
    }
}
