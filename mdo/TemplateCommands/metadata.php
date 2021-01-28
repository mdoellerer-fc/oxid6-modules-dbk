<?php

namespace mdo\TemplateCommands;

use mdo\TemplateCommands\Application\Controller\Admin\SyselevenMaintenance;

$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'          => 'mdomaintenance',
    'title' => [
        'de' => 'mdo Maintenance',
    ],
    'description' => [
        'de' => '.',
    ],
    'thumbnail'   => '',
    'version'     => '1.0.0',
    'author'      => '',
    'email'       => '',

    'controllers' => [
        'SyselevenMaintenance'  => SyselevenMaintenance::class,
    ],
    'extend'      => [ ],
    'templates'   => [
        'MaintenanceController.tpl'  => 'mdo/Maintenance/Application/views/cdsx/tpl/MaintenanceController.tpl',
        'SyselevenMaintenance.tpl'             => 'mdo/Maintenance/Application/views/admin/tpl/SyselevenMaintenance.tpl',
    ],
    'events'      => [],
    'settings'    => [],
    'blocks'      => [],
];
