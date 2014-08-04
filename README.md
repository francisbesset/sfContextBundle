sfContextBundle, The symfony's sfContext in Symfony2
====================================================

Use the fantastic sfContext instance in your Symfony2 project.


## Information

__This bundle is a joke. Please do not use.__

## Installation

First, grab sfContextBundle using [Composer](http://getcomposer.org/):

    composer require francisbesset/sfContextBundle:~1.0

Then register the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new sfContextBundle\sfContextBundle(),
    );
}
```

## Usage

``` php
<?php
// any class, code
sfContext::getInstance()->getContainer();
```


__ENJOY!__

