<?php


namespace Src;


class SpaceService
{

    protected $spaceFactory;

    public function __construct()
    {
        $this->spaceFactory =  new SpaceFactory();
    }

    public function processSpaceData(array $data)
    {
        $space = $this->spaceFactory->newSpace($data);
        $space->registerToNetwork();
        $space->save();
        $dto = $space->toDto();
        return $dto;
    }
}
