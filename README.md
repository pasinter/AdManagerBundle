AdManagerBundle
===============

Introduction
------------
This Symfony2 bundle offers a simple interface to manage website advertising.

## Prerequisites

This version of the bundle requires Symfony 2.3. 

##Installation

### Step 1: Download AdManagerBundle using composer
This library is available on [Packagist](http://packagist.org/packages/pasinter/admanager-bundle).

Add the following to your `composer.json`:

```js
"require": {
    ...
    "pasinter/admanager-bundle": "dev-master",
    ...
}
```

And run 
``` bash
$ php composer.phar install
```

Composer will install the bundle to your project's `vendor/pasinter` directory.

### Step 2: Enable the bundle
Add the bundle to `app/AppKernel.php`:

``` php
public function registerBundles()
{
    return array(
        ...
        new Pasinter\AdManagerBundle\PasinterAdManagerBundle(),
        ...
    );
}
```

### Step 3: Configure dependencies
Install & configure SonataAdminBundle (https://github.com/sonata-project/SonataAdminBundle) and SonataMediaBundle (https://github.com/sonata-project/SonataMediaBundle)

### Step 4: Update your database schema
``` bash
$ php app/console doctrine:schema:update --force
```

+### Step 5: Update your app/config/config.yml
``` yml
sonata_media:
    contexts:
        admanager:
            providers:
                - sonata.media.provider.image
            formats:
                small: { width: 150 , quality: 95 } # use your desired format
                big:   { width: 500 , quality: 90 } # use your desired format
                carousel: { width: 710, quality: 90} # use your desired format
```


## Usage

### Ad Management
Login to `http://app.com/app_dev.php/admin`. Under "Ad Manager" you can manage Ads and Campaigns

#### Ads
An Ad has Link, Title and Image fields. 

#### Campaigns
Campaigns have unique code that can be used to display them on frontend. 
