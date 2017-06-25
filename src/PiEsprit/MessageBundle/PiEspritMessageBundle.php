<?php

namespace PiEsprit\MessageBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PiEspritMessageBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSMessageBundle';
    }
}
