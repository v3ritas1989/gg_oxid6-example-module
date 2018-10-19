### OXID 6 example module
A simple and basic OXID 6 module.
This is a clone of linslin/oxid6-example-module

## Deploy
Deploy this repo in your root shop folder where you find source and vendor folder
deoploy it like  ./youvendorname/modulename

## Add to root composer.json
For developing with a local copy which is not registered

    "repositories": [
        {
            "type": "path",
            "url": "./youvendorname/modulename"
        }
    ],
    "require": {
        "youvendorname/modulename": "dev-master"
    },

## Install via composer

`composer require youvendorname/modulename:dev-master`


## Helpfull documentation
https://docs.oxid-esales.com/developer/en/6.0/modules/using_namespaces_in_modules.html#

## Namespace creation
https://docs.oxid-esales.com/developer/en/6.0/modules/using_namespaces_in_modules.html#using-namespaces-in-module-classes-that-do-not-extend-oxid-eshop-classes