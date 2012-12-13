AdManagerBundle
===============

Introduction
------------
This Symfony2 bundle offers a simple interface to manage website advertising.


Installation
------------

This library is available on [Packagist](http://packagist.org/packages/pasinter/admanager-bundle).

To install it, add the following to your `composer.json`:

```
"require": {
    ...
    "pasinter/admanager-bundle": "dev-master",
    ...
}
```

And run `$ php composer.phar install`.

Then add the bundle to `app/AppKernel.php`:

```
public function registerBundles()
{
    return array(
        ...
        new Pasinter\AdManagerBundle\PasinterAdManagerBundle(),
        ...
    );
}
```
