<?php declare(strict_types=1);

namespace Spaces;

use Src\Space;

class GroupSpace implements Space
{
    public function getType()
    {
        return 'group';
    }

    public function log()
    {
        echo '<center><h1>This is a Group Space for Group Conversations</h1></center>';
    }
}
