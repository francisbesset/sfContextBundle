<?php

namespace sfContextBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class sfContextBundle extends Bundle
{
    public function boot()
    {
        \sfContext::createInstance($this->container);
    }
}
