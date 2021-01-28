<?php


use mdo\Admin\Application\Controller\Admin\ModuleMain as MyModuleMain;
use mdo\Admin\Application\Controller\Admin\ModuleConfiguration as MyModuleConfiguration;
use mdo\Admin\Core\SendEmail as MySendEmail;
use OxidEsales\Eshop\Application\Controller\Admin\ModuleMain;
use OxidEsales\Eshop\Application\Controller\Admin\ModuleConfiguration;
use OxidEsales\Eshop\Core\Email;


$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id'          => 'mdoadmin',
    'title'       => [
        'de' => 'mdo Admin',
    ],
    'description' => [
        'de' => ' ',
    ],
    'thumbnail'   => '',
    'version'     => '1.0.0',
    'author'      => '',
    'email'       => '',

    'controllers' => [
        'AdminLogAdminList'          => mdo\Admin\Application\Controller\Admin\AdminLogAdminList::class,
    ],
    'extend'      => [
        ModuleMain::class           => MyModuleMain::class,
        ModuleConfiguration::class  => MyModuleConfiguration::class,
        Email::class                => MySendEmail::class,
    ],
    'templates'   => [
        'AdminLogAdminList.tpl' => 'mdo/Admin/Application/views/admin/tpl/AdminLogAdminList.tpl',
    ],
    'events'      => [
        'onActivate'   => \mdo\Admin\Core\Event\AdminEvents::class.'::onActivate',
    ],
    'settings'    => [],
    'blocks'      => [],
];
