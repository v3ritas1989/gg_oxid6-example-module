### OXID 6 example module
A simple and basic OXID 6 module.
This is a clone of linslin/oxid6-example-module

## Install via composer

`composer require vendor/modulename:dev-master`

## Add to root composer.json
For developing with a local copy which is not registered

    "repositories": [
        {
            "type": "path",
            "url": "./vendor/gg_oxid6-example-module"
        }
    ],
    "require": {
        "vendor/gg_oxid6-example-module": "dev-master"
    },
