### OXID 6 example module
A simple and basic OXID 6 module.
This is a clone of linslin/oxid6-example-module

## Install via composer

`composer require vendor/modulename:dev-master`


## For developing with a local copy which is not registered
## Add to root composer.json
    "repositories": [
        {
            "type": "path",
            "url": "./source/modules/linslin/oxid6-example-module"
        }
    ],
    "require": {
        "linslin/oxid6-example-module": "dev-master"
    },