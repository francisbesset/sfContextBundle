sfContextBundle, The symfony's sfContext in Symfony2
====================================================

Use the fantastic sfContext instance in your Symfony2 project.


## Information

__This bundle is a joke. Please do not use.__

## Installation

Add the following lines in your deps file:

```
[sfContextBundle]
    git=https://github.com/francisbesset/sfContextBundle.git
    target=bundles/sfContextBundle
```

Now, run the vendors script to download the bundle:

``` bash
$ php bin/vendors install
```

Add the `sfContextBundle` namespace to your autoloader:

``` php
<?php
// app/autoload.php

$loader->registerNamespaces(array(
    // ...
    'sfContextBundle' => __DIR__.'/../vendor/bundles',
));
```

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

