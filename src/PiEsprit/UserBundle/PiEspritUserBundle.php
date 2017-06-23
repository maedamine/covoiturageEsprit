<?php

namespace PiEsprit\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PiEspritUserBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }

}

