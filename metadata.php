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
    'id'          => 'gripgateExampleModule',
    'title'       => array(
        'de' => 'OXID6 example module',
        'en' => 'OXID6 example module',
    ),
    'description' => array(
        'de' => '<h2>OXID6 example module</h2>',
        'en' => '<h2>OXID6 example module</h2>',
    ),
    'thumbnail'   => 'out/pictures/gripgate-org-logo.png',
    'version'     => '1.0.0',
    'author'      => 'gripgate.org UG | Codes and freedom',
    'url'         => 'https://www.gripgate.org',
    'email'       => 'info@gripgate.org',
    'extend'      => array(
    ),
    'controllers'       => array(
        'gripgateexamplemodulemain' => \gripgate\oxid6ExampleModule2\Controller\Admin\MainController::class,
    ),
    'files'       => array(),
    'templates'   => array(
        'main.tpl' => 'gripgate/gg_oxid6-example-module/views/admin/main.tpl'
    ),
    'blocks'      => array(),
    'settings'    => array(),
    'events'      => array(),
);
