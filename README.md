sfContextBundle, The symfony's sfContext in Symfony2
====================================================

Use the fantastic sfContext instance in your Symfony2 project.


## Information

__This bundle is a joke. Please do not use.__

## Installation

### Step 1) Get the bundle

First, grab sfContextBundle. There are two different ways to do this:

#### Method a) Using composer (symfony 2.1 pattern)

Run the following command to add the package to your composer.json
(see http://getcomposer.org/):

``` bash
$ php composer.phar require francisbesset/sfContextBundle:dev-master
```

#### Method b) Using the `deps` file (symfony 2.0 pattern)

Add the following lines to your `deps` file and then run `php bin/vendors
install`:

    [sfContextBundle]
        git=https://github.com/francisbesset/sfContextBundle.git
        target=bundles/sfContextBundle

You should then add the `sfContextBundle` namespace to your autoloader:

``` php
<?php
// app/autoload.php

$loader->registerNamespaces(array(
    // ...
    'sfContextBundle' => __DIR__.'/../vendor/bundles',
));
```

### Step 2) Register the bundle

Finally, enable the bundle in the kernel:

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

