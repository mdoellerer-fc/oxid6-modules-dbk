<?php



use mdo\ConfigObserver\Application\Controller\Admin\ModuleConfiguration as MyModuleConfiguration;
use mdo\ConfigObserver\Core\SendEmail as MySendEmail;
use OxidEsales\Eshop\Application\Controller\Admin\ModuleConfiguration;
use OxidEsales\Eshop\Core\Email;


$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id'          => 'mdoConfigObserver',
    'title'       => [
        'de' => 'MDO Config Observer',
    ],
    'description' => [
        'de' => 'Config Observer ',
    ],
    'thumbnail'   => '',
    'version'     => '1.0.0',
    'author'      => '',
    'email'       => '',

    'controllers' => [
        'ConfigLogAdminList'          => mdo\ConfigObserver\Application\Controller\Admin\ConfigLogAdminList::class,
    ],
    'extend'      => [
        ModuleConfiguration::class  => MyModuleConfiguration::class,
        Email::class                => MySendEmail::class,
    ],
    'templates'   => [
        'ConfigLogAdminList.tpl' => 'mdo/ConfigObserver/Application/views/admin/tpl/ConfigLogAdminList.tpl',
    ],
    'events'      => [
        'onActivate'   => '\mdo\ConfigObserver\Core\Events::onActivate',
    ],
    'settings'    => [
        ['group' => 'CONFIGOBSERVER_EMAIL_RECIPIENT', 'name' => 'sMdoConfigObserverEmailRecipient', 'type' => 'str', 'value' => '', 'position' => 10],
    ],
    'blocks'      => [],
];
