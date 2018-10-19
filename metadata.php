<?php
/**
 * @TODO LICENCE HERE
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'myExampleModule',
    'title'       => array(
        'de' => 'OXID6 example module',
        'en' => 'OXID6 example module',
    ),
    'description' => array(
        'de' => '<h2>OXID6 example module</h2>',
        'en' => '<h2>OXID6 example module</h2>',
    ),
    'thumbnail'   => 'out/pictures/my-org-logo.png',
    'version'     => '1.0.0',
    'author'      => 'my.org UG | Codes and freedom',
    'url'         => 'https://www.my.org',
    'email'       => 'info@my.org',
    'extend'      => array(
    ),
    'controllers'       => array(
        'myexamplemodulemain' => \my\gg_oxid6ExampleModule\Controller\Admin\MainController::class,
    ),
    'files'       => array(

    ),
    'templates'   => array(
        'main.tpl' => 'my/gg_oxid6examplemodule/views/admin/main.tpl'
    ),
    'blocks'      => array(),
    'settings'    => array(),
    'events'      => array(),
);
