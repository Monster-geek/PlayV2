<?php

namespace Play\MainBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PlayMainBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
