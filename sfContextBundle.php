<?php

namespace sfContextBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class sfContextBundle extends Bundle
{
    public function boot()
    {
        require_once __DIR__.DIRECTORY_SEPARATOR.'sfContext.php';

        $this->container->get('sfContext');
    }
}
