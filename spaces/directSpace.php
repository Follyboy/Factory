<?php declare(strict_types=1);

namespace Factory\src;

class DirectSpace implements Space
{
    public function log()
    {
        echo 'This is a Direct Space for Direct Conversations';
    }
}