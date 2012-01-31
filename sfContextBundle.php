<?php

namespace sfContextBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class sfContextBundle extends Bundle
{
    public function boot()
    {
        include_once __DIR__.'/sfContext.php';
        \sfContext::createInstance($this->container);
    }
}
