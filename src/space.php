<?php  declare(strict_types=1);

namespace Src;

interface Space
{
    public function getType();
    public function log();

    public function registerToNetwork();
    public function save();
    public function toDto();
}
