<?php

namespace mdo\Views;

use OxidEsales\Eshop\Application\Controller\Admin\ModuleConfiguration;


$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id' => 'mdoDefaultListView',
    'title' => [
        'de' => 'Oxid 6 Default List Views',
    ],
    'description' => [
        'de' => 'Modul.',
        'en' => 'Module',
    ],
    'thumbnail' => '',
    'version' => '1.0.0',
    'author' => '',
    'email' => '',

    'controllers' => [
        'fctradebyteone_channels_admin'     => \FATCHIP\fcTradebyteOne\Application\Controller\Admin\fctradebyteone_channels_admin::class,
        'fctradebyteone_channels_list'  => \FATCHIP\fcTradebyteOne\Application\Controller\Admin\fctradebyteone_channels_list::class,
        'fctradebyteone_channels_main'  => \FATCHIP\fcTradebyteOne\Application\Controller\Admin\fctradebyteone_channels_main::class,
    ],
    'extend' => [],
    'templates' => [
        'fctradebyteone_channels_admin.tpl'    => 'fc/fcTradebyteOne/Application/views/admin/tpl/fctradebyteone_channels_admin.tpl',
        'fctradebyteone_channels_list.tpl'     => 'fc/fcTradebyteOne/Application/views/admin/tpl/fctradebyteone_channels_list.tpl',
        'fctradebyteone_channels_main.tpl'     => 'fc/fcTradebyteOne/Application/views/admin/tpl/fctradebyteone_channels_main.tpl',
    ],
    'events' => [],
    'settings' => [],
    'blocks' => [],
];
