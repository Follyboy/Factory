<?php declare(strict_types=1);

namespace Spaces;

use Src\Space;

class DirectSpace implements Space
{
    public function getType()
    {
       return 'direct';
    }

    public function log()
    {
        echo '<center><h1>This is a Direct Space for Direct Conversations</h1></center>';
    }
}
