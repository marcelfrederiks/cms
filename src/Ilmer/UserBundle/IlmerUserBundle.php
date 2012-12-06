<?php

namespace Ilmer\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class IlmerUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
