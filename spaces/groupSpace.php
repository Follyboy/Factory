<?php declare(strict_types=1);

namespace Factory\src;

class GroupSpace implements Space
{
    public function log()
    {
        echo 'This is a Group Space for Group Conversations';
    }
}