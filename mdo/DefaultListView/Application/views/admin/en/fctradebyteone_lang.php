<?php
/*
 * @package OXID2Tradebyte Connector
 * @author Hendrik Bahr, Robert Mueller <support@fatchip.de>
 * @copyright (C) 2013, FATCHIP GmbH
 * 
 * This Software is the property of FATCHIP GmbH
 * and is protected by copyright law - it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be
 * prosecuted by civil and criminal law.
 */


$sLangName  = "English";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    'charset'                                                => 'utf-8',
    'mxfctradebyte'                                         => 'FC Tradebyte',
    'mxfctradebyteone'                                        => 'Oxid2Tb',
    'mxfctradebyteone_main'                                    => 'Main',
    'mxfctradebyteone_config'                                => 'Config',
    'mxfctradebyteone_channels_admin'                       => 'Tradebyte Channels',
    'mxfctradebyteone_channels_main'                        => 'Main',
    'tbclfctradebyteone_article_tbone'                        => 'Oxid2Tb',
    'tbclfctradebyteone_attribute_tbone'                    => 'Oxid2Tb',
    'tbclfctradebyteone_category_tbone'                        => 'Oxid2Tb',
    'mxfctradebyteone_channeltags'                            => 'Tags',
    'mxfctradebyteone_channeltags_main'                        => 'Main',
    'fctradebyteone_channels_new'                               => 'Activte another Channel',
    'fctradebyteone_channeltags_new'                        => 'New Tag',
    'FCTBONE_MAIN_BTEXPORT'                                    => 'export now',
    'FCTBONE_MAIN_BTEXPORT_DESC'                            => 'generates the XML file and uploads it to Tradebyte server',
    'FCTBONE_CONFIG_MODULEVERSION'                            => 'Module version',

    // translations for Extensions -> Modules -> Settings tab
    'SHOP_MODULE_GROUP_FCTBONE_ORDER_IMPORT'                => 'Order Import',
    'SHOP_MODULE_blFcTbOneOrderImportActive'                => 'Order import active',
    'SHOP_MODULE_sFcTbOneOrderImportDir'                    => 'Order xml dir on remote server',
    'SHOP_MODULE_sFcTbOneOrderPaymentId'                    => 'Default payment method OXID, which will be used for the order import.<br>You will find the payment OXID with the payment configurations (Shop Settings -> Payment Methods).',
    'SHOP_MODULE_sFcTbOneOrderDeliveryId'                   => 'Default delivery method OXID, which will be used for the order import.<br>You will find the delivery OXID with the delivery configurations (Shop Settings -> Shipping Methods).',
    'SHOP_MODULE_sFcTbOneOrderVat'                          => 'Default VAT (in %) for order import',
    'SHOP_MODULE_sFcTbOneOrderEmailDomain'                  => 'Used for non-existing users to generate username.',
    'SHOP_MODULE_iTBOneArchiveLifetime'                     => 'XML Archive time in days',
    'SHOP_MODULE_GROUP_FCTBONE_LOGGING'                     => 'Logging',
    'SHOP_MODULE_blFcTbOneLoggingActive'                    => 'active',
    'SHOP_MODULE_sFcTbOneCommTypeOrderImport'               => 'Communication Type order-import',
    'SHOP_MODULE_sFcTbOneCommTypeOrderImport_rest'          => 'REST API',
    'SHOP_MODULE_sFcTbOneCommTypeOrderImport_ftp'           => 'SFTP',
    
    'SHOP_MODULE_GROUP_support'                             => 'Supportkey',
    'SHOP_MODULE_sFcSupportKey'                             => '',
    'HELP_SHOP_MODULE_sFcSupportKey'                        => 'You find the support key within the e-mail you received which included your ordered module. Without this key FATCHIP GmbH is not able to give support.',

    'SHOP_MODULE_GROUP_FCTBONE_MAIN'                        => 'Main',
    'SHOP_MODULE_blFcTbOneActive'                           => 'active',
    'SHOP_MODULE_sFcTbOnePhpInterpreter'                    => 'PHP-Interpreter for export call',
    'SHOP_MODULE_sFcTbOneTbcatVersion'                      => 'TBCAT file version for export products',
    'SHOP_MODULE_sFcTbOneTbcatVersion_12'                   => 'v1.2',
    'SHOP_MODULE_sFcTbOneTbcatVersion_14'                   => 'v1.4',

    'SHOP_MODULE_GROUP_FCTBONE_REST'                        => 'Tradebyte REST-API settings',
    'SHOP_MODULE_blFcTbOneRestUploadActive'                 => 'REST Upload active (deactivate for testing)',
    'SHOP_MODULE_sFcTbOneRestUrl'                           => 'API-URL (i.e. rest.trade-server.net)',
    'SHOP_MODULE_sFcTbOneRestHnr'                           => 'Merchant Number',
    'SHOP_MODULE_sFcTbOneRestUser'                          => 'Username',
    'SHOP_MODULE_sFcTbOneRestPass'                          => 'Password',
    
    'SHOP_MODULE_GROUP_FCTBONE_SFTP'                        => 'Tradebyte SFTP settings',
    'SHOP_MODULE_blFcTbOneSftpUploadActive'                 => 'SFTP active',
    'SHOP_MODULE_sFcTbOneSftpHost'                          => 'Host-URL',
    'SHOP_MODULE_sFcTbOneSftpUser'                          => 'Username',
    'SHOP_MODULE_sFcTbOneSftpPass'                          => 'Password',

    'SHOP_MODULE_GROUP_FCTBONE_CHANNELS'                    => 'Tradebyte Channels',
    'SHOP_MODULE_blFcTbOneChannelShowActiveOnly'            => 'Show only active channels',
    
    'SHOP_MODULE_GROUP_FCTBONE_PRODUCTS'                    => 'Products settings',
    'SHOP_MODULE_blFcTbOneExportInactiveArticles'                => 'exported inactive article too',
    'SHOP_MODULE_blFcTbOneGenerateEan'             => 'generate oxean',

    'FCTRADEBYTEONE_ARTICLE_TBONE_CHANNEL'                    => 'Channel',
    'FCTRADEBYTEONE_ARTICLE_TBONE_PRICE'                    => 'Price',
    'FCTRADEBYTEONE_ARTICLE_TBONE_ACTIVE'                    => 'Active',
    'FCTRADEBYTEONE_ARTICLE_TBONE_DESCRIPTION'                => 'LongDesc',
    'FCTRADEBYTEONE_ARTICLE_TBONE_TAG'                        => 'Channel Tag',
    'FCTRADEBYTEONE_ARTICLE_TBONE_VALUE'                    => 'Tag value',
    'FCTRADEBYTEONE_ARTICLE_TBONE_FIELD_IS_MISSING'            => 'Field is missing!',
    'FCTBONE_ARTICLE_TBONE_SELECT_TAG'                        => '--- Select Tag ---',
    'FCTBONE_ARTICLE_TBONE_SELECT_TAG_VALUE'                => '--- Select Tag value ---',
    'FCTBONE_ATTRIBUTE_MAPID'                                => 'TB.One attribute',

    'FCTRADEBYTEONE_CATEGORY_TBONE_IDENT'                    => 'Ident',

    'FCTBONE_LIST_ACTIVE'                                   => 'Active',
    'FCTBONE_LIST_TITLE'                                    => 'Title',
    'FCTBONE_LIST_USE_UVP'                                   => 'UVP instead Oxprice',
    'FCTBONE_LIST_CHANNELID'                                => 'Channel ID',
    'FCTBONE_CHANNELTAG_MAIN_TITLE'                            => 'Titel',
    'FCTBONE_CHANNELTAG_MAIN_CHANNEL'                        => 'Channel',
    'FCTBONE_CHANNELTAG_MAIN_OPTIONS'                        => 'Options',
    'FCTBONE_CHANNEL_MAIN_NAME'                  => 'Name',
    'FCTBONE_CHANNEL_MAIN_CHANNEL'               => 'Channel',
    'FCTBONE_CHANNEL_MAIN_ACTIVE_CHECK'          => 'Active',
    'FCTBONE_CHANNEL_MAIN_UVP_CHECK'             => 'Use uvp instead of oxprice',

    'FCTBONE_DELETE_TAG_ASSIGNMENT'                            => 'Delete tag assignment?',
    'FCTBONE_EMPTY_TAG_LIST'                                => 'Empty list',
    'FCTBONE_ARTICLE_PICTURES'                                => 'TB.One product pictures',
    'FCTBONE_EXECUTION_INFO_CALLING'                        => 'Calling',
    'FCTBONE_EXECUTION_EMPTY_OUTPUT_ERROR'                  => 'No Result',

        #tbone
    'GENERAL_ARTICLE_FCTRADEBYTEONEDESC'            => 'alternate longdescription',
    'GENERAL_ARTICLE_FCTBONEAMDEPRICE'              => 'Amazon.de price',
    'GENERAL_ARTICLE_FCTBONEAMDEACTIVE'             => 'Amazon.de active',
    'GENERAL_ARTICLE_FCTBONEMPDEPRICE'              => 'Meinpaket.de price',
    'GENERAL_ARTICLE_FCTBONEMPDEACTIVE'             => 'Meinpaket.de active',
    'GENERAL_ARTICLE_FCTBONENCHPRICE'               => 'Neckermann.ch price',
    'GENERAL_ARTICLE_FCTBONENCHACTIVE'              => 'Neckermann.ch active',
    'GENERAL_ARTICLE_FCTBONENDEPRICE'               => 'Neckermann.de price',
    'GENERAL_ARTICLE_FCTBONENDEACTIVE'              => 'Neckermann.de active',
    'GENERAL_ARTICLE_FCTBONEPODEPRICE'              => 'Plus.de price',
    'GENERAL_ARTICLE_FCTBONEPODEACTIVE'             => 'Plus.de active',
    'GENERAL_ARTICLE_FCTBONEQUDEPRICE'              => 'Quelle.de price',
    'GENERAL_ARTICLE_FCTBONEQUDEACTIVE'             => 'Quelle.de active',
    'GENERAL_ARTICLE_FCTBONEZADEPRICE'              => 'Zalando.de price',
    'GENERAL_ARTICLE_FCTBONEZADEACTIVE'             => 'Zalando.de active',
    'GENERAL_ARTICLE_FCTBONEAMFRACTIVE'             => 'Amazon.fr price',
    'GENERAL_ARTICLE_FCTBONEAMFRPRICE'              => 'Amazon.fr active',
    'GENERAL_ARTICLE_FCTBONEAMUKACTIVE'             => 'Amazon.co.uk price',
    'GENERAL_ARTICLE_FCTBONEAMUKPRICE'              => 'Amazon.co.uk active',
    'GENERAL_ARTICLE_FCTBONEBWDEACTIVE'             => 'Baby-Walz.de price',
    'GENERAL_ARTICLE_FCTBONEBWDEPRICE'              => 'Baby-Walz.de active',
    'GENERAL_ARTICLE_FCTBONEBURDACTIVE'             => 'Burda price',
    'GENERAL_ARTICLE_FCTBONEBURDPRICE'              => 'Burda active',
    'GENERAL_ARTICLE_FCTBONEHEDEACTIVE'             => 'Hertie.de price',
    'GENERAL_ARTICLE_FCTBONEHEDEPRICE'              => 'Hertie.de active',
    'GENERAL_ARTICLE_FCTBONEKADEACTIVE'             => 'Karstadt.de price',
    'GENERAL_ARTICLE_FCTBONEKADEPRICE'              => 'Karstadt.de active',
    'GENERAL_ARTICLE_FCTBONELIDEACTIVE'             => 'Lidl.de price',
    'GENERAL_ARTICLE_FCTBONELIDEPRICE'              => 'Lidl.de active',
    'GENERAL_ARTICLE_FCTBONEMOPRACTIVE'             => 'Möbel-Profi price',
    'GENERAL_ARTICLE_FCTBONEMOPRPRICE'              => 'Möbel-Profi active',
    'GENERAL_ARTICLE_FCTBONENATACTIVE'              => 'Neckermann.at price',
    'GENERAL_ARTICLE_FCTBONENATPRICE'               => 'Neckermann.at active',
    'GENERAL_ARTICLE_FCTBONENNLACTIVE'              => 'Neckermann.nl price',
    'GENERAL_ARTICLE_FCTBONENNLPRICE'               => 'Neckermann.nl active',
    'GENERAL_ARTICLE_FCTBONEOTDEACTIVE'             => 'Otto.de price',
    'GENERAL_ARTICLE_FCTBONEOTDEPRICE'              => 'Otto.de active',
    'GENERAL_ARTICLE_FCTBONEOTCOACTIVE'             => 'Otto.de Koop price',
    'GENERAL_ARTICLE_FCTBONEOTCOPRICE'              => 'Otto.de Koop active',
    'GENERAL_ARTICLE_FCTBONESHGAACTIVE'             => 'Shopgate.com price',
    'GENERAL_ARTICLE_FCTBONESHGAPRICE'              => 'Shopgate.com active',
    'GENERAL_ARTICLE_FCTBONEWEDEACTIVE'             => 'Wellwide.de price',
    'GENERAL_ARTICLE_FCTBONEWEDEPRICE'              => 'Wellwide.de active',
    'GENERAL_ARTICLE_FCTBONEPIC1'                   => 'TB.One picture 1',
    'GENERAL_ARTICLE_FCTBONEPIC2'                   => 'TB.One picture 2',
    'GENERAL_ARTICLE_FCTBONEPIC3'                   => 'TB.One picture 3',
    'GENERAL_ARTICLE_FCTBONEPIC4'                   => 'TB.One picture 4',
    'GENERAL_ARTICLE_FCTBONEPIC5'                   => 'TB.One picture 5',
    'GENERAL_ARTICLE_FCTBONEPIC6'                   => 'TB.One picture 6',
    'GENERAL_ARTICLE_FCTBONEPIC7'                   => 'TB.One picture 7',
    'GENERAL_ARTICLE_FCTBONEPIC8'                   => 'TB.One picture 8',
    'GENERAL_ARTICLE_FCTBONEZANLACTIVE'             => 'Zalando.nl price',
    'GENERAL_ARTICLE_FCTBONEZANLPRICE'              => 'Zalando.nl active',
    'GENERAL_ARTICLE_FCTBONEZAATACTIVE'             => 'Zalando.at price',
    'GENERAL_ARTICLE_FCTBONEZAATPRICE'              => 'Zalando.at active',
    'GENERAL_ARTICLE_FCTBONEEBDEPRICE'              => 'Ebay price',
    'GENERAL_ARTICLE_FCTBONEEBDEACTIVE'             => 'Ebay active',
    'GENERAL_ARTICLE_FCTBONERADEPRICE'              => 'Rakuten price',
    'GENERAL_ARTICLE_FCTBONERADEACTIVE'             => 'Rakuten active',
    'GENERAL_ARTICLE_FCTBONEWBDEPRICE'              => 'Weltbild.de price',
    'GENERAL_ARTICLE_FCTBONEWBDEACTIVE'             => 'Weltbild.de active',
    'GENERAL_ARTICLE_FCTBONEREMOVEVARIANT'          => 'Deactive variant for export',

    'FCTRADEBYTEONE_OXID'                           => 'OXID',
);

if (class_exists('fctradebyteone_export') ){
    $oExport = oxNew('FATCHIP\fcTradebyteOne\Core\fctradebyteone_export');
    $aChannels = $oExport->fcGetChannelsFromXml();
    foreach ($aChannels as $aChannel) {	
        $aLang['SHOP_MODULE_blFcTbOneChannel'.ucfirst($aChannel['ident'])] = $aChannel['title'];
        $aLang['SHOP_MODULE_blFcTbOneChannel'.ucfirst($aChannel['ident'].'UVP')] = 'Use uvp instead of oxprice for '.$aChannel['title'];
        $aLang['SHOP_MODULE_blFcTbOneChannel'.ucfirst($aChannel['ident'].'_0')] = 'Inactive';
        $aLang['SHOP_MODULE_blFcTbOneChannel'.ucfirst($aChannel['ident'].'_1')] = 'Active';
        $aLang['SHOP_MODULE_blFcTbOneChannel'.ucfirst($aChannel['ident'].'_2')] = 'Inactive, but visible in admin';
    }
}
