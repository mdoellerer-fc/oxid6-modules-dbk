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


$sLangName = "Deutsch";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    'charset'                                      => 'UTF-8',
    'mxfctradebyte'                                => 'FC Tradebyte',
    'mxfctradebyteone'                             => 'Oxid2Tb',
    'mxfctradebyteone_main'                        => 'Stamm',
    'mxfctradebyteone_config'                      => 'Config',
    'mxfctradebyteone_channels_admin'             => 'Tradebyte Channels',
    'mxfctradebyteone_channels_main'              => 'Main',
    'tbclfctradebyteone_article_tbone'             => 'Oxid2Tb',
    'tbclfctradebyteone_attribute_tbone'           => 'Oxid2Tb',
    'tbclfctradebyteone_category_tbone'            => 'Oxid2Tb',
    'mxfctradebyteone_channeltags'                 => 'Tags',
    'mxfctradebyteone_channeltags_main'            => 'Main',
    'fctradebyteone_channels_new'                  => 'Neuen Kanal aktivieren',
    'fctradebyteone_channeltags_new'               => 'New Tag',
    'FCTBONE_MAIN_BTEXPORT'                        => 'Jetzt exportieren',
    'FCTBONE_MAIN_BTEXPORT_DESC'                   => 'Erzeugt die XML Datei und l&auml;dt diese zum Tradebyte Server hoch',
    'FCTBONE_CONFIG_MODULEVERSION'                 => 'Modulversion',

    // translations for Extensions -> Modules -> Settings tab
    'SHOP_MODULE_GROUP_FCTBONE_ORDER_IMPORT'       => 'Bestellimport',
    'SHOP_MODULE_blFcTbOneOrderImportActive'       => 'Bestellimport aktiv',
    'SHOP_MODULE_sFcTbOneOrderImportDir'           => 'Ordner auf dem Remote Server für XML Bestellungen',
    'SHOP_MODULE_sFcTbOneOrderPaymentId'           => 'OXID der Default Zahlart, die für den Bestellimport genutzt werden soll.<br>Die OXID der Zahlart befindet sich bei der Konfiguration für die Zahlarten (Shopeinstellungen -> Zahlungsarten).',
    'SHOP_MODULE_sFcTbOneOrderDeliveryId'          => 'OXID der Default Versandart, die für den Bestellimport genutzt werden soll.<br>Die OXID der Versandart befindet sich bei der Konfiguration für die Versandarten (Shopeinstellungen -> Versandarten).',
    'SHOP_MODULE_sFcTbOneOrderVat'                 => 'Default Mehrwertsteuer (in %) für den Bestellimport',
    'SHOP_MODULE_sFcTbOneOrderEmailDomain'         => 'Wird zur Generierung der Benutzernamen für nicht existierende Benutzer benötigt.',
    'SHOP_MODULE_iTBOneArchiveLifetime'            => 'XML Archivierungsdauer in Tagen',
    'SHOP_MODULE_GROUP_FCTBONE_LOGGING'            => 'Logging',
    'SHOP_MODULE_blFcTbOneLoggingActive'           => 'aktiv',
    'SHOP_MODULE_sFcTbOneLogLevel'                 => 'Loglevel (1-4)',
    'HELP_SHOP_MODULE_sFcTbOneLogLevel'            => '<ul><li><b>1:</b> Nur Fehler</li><li><b>2:</b> Fehler und Warnungen</li><li><b>3:</b> Fehler, Warnungen und Abläufe</li><li><b>4:</b> Entwicklerdebugging</li></ul>',
    'SHOP_MODULE_GROUP_support'                    => 'Supportkey',
    'SHOP_MODULE_sFcSupportKey'                    => '',
    'HELP_SHOP_MODULE_sFcSupportKey'               => 'Den Supportkey finden Sie in der E-Mail mit Ihrem Modul. Ohne Nennung dieses Keys kann Ihnen die FATCHIP GmbH keinen Support leisten.',
    'SHOP_MODULE_sFcTbOneCommTypeOrderImport'      => 'Kommunikationsart Bestellimport',
    'SHOP_MODULE_sFcTbOneCommTypeOrderImport_rest' => 'REST API',
    'SHOP_MODULE_sFcTbOneCommTypeOrderImport_ftp'  => 'SFTP',

    'SHOP_MODULE_GROUP_FCTBONE_MAIN'     => 'Grundeinstellungen',
    'SHOP_MODULE_blFcTbOneActive'        => 'aktiv',
    'SHOP_MODULE_sFcTbOnePhpInterpreter' => 'PHP-Interpreter f&uuml;r den Exportaufruf',
    'SHOP_MODULE_sFcTbOneTbcatVersion'      => 'TBCAT Dateiversion für Exportprodukte',
    'SHOP_MODULE_sFcTbOneTbcatVersion_12'   => 'v1.2',
    'SHOP_MODULE_sFcTbOneTbcatVersion_14'   => 'v1.4',

    'SHOP_MODULE_GROUP_FCTBONE_REST'        => 'Tradebyte REST-API Zugangsdaten',
    'SHOP_MODULE_blFcTbOneRestUploadActive' => 'REST Upload aktiv (Deaktivieren zu Testzwecken)',
    'SHOP_MODULE_sFcTbOneRestUrl'           => 'API-URL (i.e. rest.trade-server.net)',
    'SHOP_MODULE_sFcTbOneRestHnr'           => 'H&auml;ndlernummer',
    'SHOP_MODULE_sFcTbOneRestUser'          => 'Username',
    'SHOP_MODULE_sFcTbOneRestPass'          => 'Password',

    'SHOP_MODULE_GROUP_FCTBONE_SFTP'        => 'Tradebyte SFTP Zugangsdaten',
    'SHOP_MODULE_blFcTbOneSftpUploadActive' => 'SFTP-Upload aktiv',
    'SHOP_MODULE_sFcTbOneSftpHost'          => 'Host-URL',
    'SHOP_MODULE_sFcTbOneSftpUser'          => 'Benutzername',
    'SHOP_MODULE_sFcTbOneSftpPass'          => 'Passwort',

    'SHOP_MODULE_GROUP_FCTBONE_CHANNELS'            => 'Tradebyte Channels',
    'SHOP_MODULE_blFcTbOneChannelShowActiveOnly'    => 'nur aktive Kanäle anzeigen',

    'SHOP_MODULE_GROUP_FCTBONE_PRODUCTS'        => 'Produkte Einstellungen',
    'SHOP_MODULE_blFcTbOneExportInactiveArticles' => 'Auch inaktive Artikel &uuml;bertragen',
    'SHOP_MODULE_blFcTbOneGenerateEan'          => 'Eigene EAN generieren wenn nicht gepflegt',

    'FCTRADEBYTEONE_ARTICLE_TBONE_CHANNEL'          => 'Channel',
    'FCTRADEBYTEONE_ARTICLE_TBONE_PRICE'            => 'alternativer Preis',
    'FCTRADEBYTEONE_ARTICLE_TBONE_ACTIVE'           => 'aktiv',
    'FCTRADEBYTEONE_ARTICLE_TBONE_DESCRIPTION'      => 'alternative Langbeschreibung',
    'FCTRADEBYTEONE_ARTICLE_TBONE_TAG'              => 'Channel Tag',
    'FCTRADEBYTEONE_ARTICLE_TBONE_VALUE'            => 'Tag value',
    'FCTRADEBYTEONE_ARTICLE_TBONE_FIELD_IS_MISSING' => 'Feld fehlt in DB!',
    'FCTBONE_ARTICLE_TBONE_SELECT_TAG'              => '--- Select Tag ---',
    'FCTBONE_ARTICLE_TBONE_SELECT_TAG_VALUE'        => '--- Select Tag value ---',
    'FCTBONE_ATTRIBUTE_MAPID'                       => 'Oxid2Tb attribute',
    'FCTRADEBYTEONE_CATEGORY_TBONE_IDENT'           => 'Ident',
    'FCTBONE_LIST_ACTIVE'                            => 'Active',
    'FCTBONE_LIST_TITLE'                            => 'Titel',
    'FCTBONE_LIST_USE_UVP'                          => 'UVP statt Oxprice',
    'FCTBONE_LIST_CHANNELID'                        => 'Channel ID',
    'FCTBONE_CHANNELTAG_MAIN_TITLE'                 => 'Titel',
    'FCTBONE_CHANNELTAG_MAIN_CHANNEL'               => 'Channel',
    'FCTBONE_CHANNELTAG_MAIN_OPTIONS'               => 'Options',
    'FCTBONE_CHANNEL_MAIN_NAME'                  => 'Name',
    'FCTBONE_CHANNEL_MAIN_CHANNEL'               => 'Channel',
    'FCTBONE_CHANNEL_MAIN_ACTIVE_CHECK'          => 'Active',
    'FCTBONE_CHANNEL_MAIN_UVP_CHECK'             => 'UVP statt oxprice benutzen ',
    'FCTBONE_DELETE_TAG_ASSIGNMENT'                 => 'Delete tag assignment?',
    'FCTBONE_EMPTY_TAG_LIST'                        => 'Empty list',
    'FCTBONE_ARTICLE_PICTURES'                      => 'alternative Produktbilder f&uuml;r Tradebyte',
    'FCTBONE_EXECUTION_INFO_CALLING'                => 'Aufruf',
    'FCTBONE_EXECUTION_EMPTY_OUTPUT_ERROR'          => 'Kein Ergebnis',

    #tbone
    'GENERAL_ARTICLE_FCTRADEBYTEONEDESC'            => 'alternative Langbeschreibung f&uuml;r Tradebyte',
    'GENERAL_ARTICLE_FCTBONEAMDEPRICE'              => 'Amazon.de Preis',
    'GENERAL_ARTICLE_FCTBONEAMDEACTIVE'             => 'Amazon.de aktiv',
    'GENERAL_ARTICLE_FCTBONEMPDEPRICE'              => 'Meinpaket.de Preis',
    'GENERAL_ARTICLE_FCTBONEMPDEACTIVE'             => 'Meinpaket.de aktiv',
    'GENERAL_ARTICLE_FCTBONENCHPRICE'               => 'Neckermann.ch Preis',
    'GENERAL_ARTICLE_FCTBONENCHACTIVE'              => 'Neckermann.ch aktiv',
    'GENERAL_ARTICLE_FCTBONENDEPRICE'               => 'Neckermann.de Preis',
    'GENERAL_ARTICLE_FCTBONENDEACTIVE'              => 'Neckermann.de aktiv',
    'GENERAL_ARTICLE_FCTBONEPODEPRICE'              => 'Plus.de Preis',
    'GENERAL_ARTICLE_FCTBONEPODEACTIVE'             => 'Plus.de aktiv',
    'GENERAL_ARTICLE_FCTBONEQUDEPRICE'              => 'Quelle.de Preis',
    'GENERAL_ARTICLE_FCTBONEQUDEACTIVE'             => 'Quelle.de aktiv',
    'GENERAL_ARTICLE_FCTBONEZADEPRICE'              => 'Zalando.de Preis',
    'GENERAL_ARTICLE_FCTBONEZADEACTIVE'             => 'Zalando.de aktiv',
    'GENERAL_ARTICLE_FCTBONEAMFRACTIVE'             => 'Amazon.fr Preis',
    'GENERAL_ARTICLE_FCTBONEAMFRPRICE'              => 'Amazon.fr aktiv',
    'GENERAL_ARTICLE_FCTBONEAMUKACTIVE'             => 'Amazon.co.uk Preis',
    'GENERAL_ARTICLE_FCTBONEAMUKPRICE'              => 'Amazon.co.uk aktiv',
    'GENERAL_ARTICLE_FCTBONEBWDEACTIVE'             => 'Baby-Walz.de Preis',
    'GENERAL_ARTICLE_FCTBONEBWDEPRICE'              => 'Baby-Walz.de aktiv',
    'GENERAL_ARTICLE_FCTBONEBURDACTIVE'             => 'Burda Preis',
    'GENERAL_ARTICLE_FCTBONEBURDPRICE'              => 'Burda aktiv',
    'GENERAL_ARTICLE_FCTBONEHEDEACTIVE'             => 'Hertie.de Preis',
    'GENERAL_ARTICLE_FCTBONEHEDEPRICE'              => 'Hertie.de aktiv',
    'GENERAL_ARTICLE_FCTBONEKADEACTIVE'             => 'Karstadt.de Preis',
    'GENERAL_ARTICLE_FCTBONEKADEPRICE'              => 'Karstadt.de aktiv',
    'GENERAL_ARTICLE_FCTBONELIDEACTIVE'             => 'Lidl.de Preis',
    'GENERAL_ARTICLE_FCTBONELIDEPRICE'              => 'Lidl.de aktiv',
    'GENERAL_ARTICLE_FCTBONEMOPRACTIVE'             => 'Möbel-Profi Preis',
    'GENERAL_ARTICLE_FCTBONEMOPRPRICE'              => 'Möbel-Profi aktiv',
    'GENERAL_ARTICLE_FCTBONENATACTIVE'              => 'Neckermann.at Preis',
    'GENERAL_ARTICLE_FCTBONENATPRICE'               => 'Neckermann.at aktiv',
    'GENERAL_ARTICLE_FCTBONENNLACTIVE'              => 'Neckermann.nl Preis',
    'GENERAL_ARTICLE_FCTBONENNLPRICE'               => 'Neckermann.nl aktiv',
    'GENERAL_ARTICLE_FCTBONEOTDEACTIVE'             => 'Otto.de Preis',
    'GENERAL_ARTICLE_FCTBONEOTDEPRICE'              => 'Otto.de aktiv',
    'GENERAL_ARTICLE_FCTBONEOTCOACTIVE'             => 'Otto.de Koop Preis',
    'GENERAL_ARTICLE_FCTBONEOTCOPRICE'              => 'Otto.de Koop aktiv',
    'GENERAL_ARTICLE_FCTBONESHGAACTIVE'             => 'Shopgate.com Preis',
    'GENERAL_ARTICLE_FCTBONESHGAPRICE'              => 'Shopgate.com aktiv',
    'GENERAL_ARTICLE_FCTBONEWEDEACTIVE'             => 'Wellwide.de Preis',
    'GENERAL_ARTICLE_FCTBONEWEDEPRICE'              => 'Wellwide.de aktiv',
    'GENERAL_ARTICLE_FCTBONEPIC1'                   => 'TB.One Bild 1',
    'GENERAL_ARTICLE_FCTBONEPIC2'                   => 'TB.One Bild 2',
    'GENERAL_ARTICLE_FCTBONEPIC3'                   => 'TB.One Bild 3',
    'GENERAL_ARTICLE_FCTBONEPIC4'                   => 'TB.One Bild 4',
    'GENERAL_ARTICLE_FCTBONEPIC5'                   => 'TB.One Bild 5',
    'GENERAL_ARTICLE_FCTBONEPIC6'                   => 'TB.One Bild 6',
    'GENERAL_ARTICLE_FCTBONEPIC7'                   => 'TB.One Bild 7',
    'GENERAL_ARTICLE_FCTBONEPIC8'                   => 'TB.One Bild 8',
    'GENERAL_ARTICLE_FCTBONEZANLACTIVE'             => 'Zalando.nl Preis',
    'GENERAL_ARTICLE_FCTBONEZANLPRICE'              => 'Zalando.nl aktiv',
    'GENERAL_ARTICLE_FCTBONEZAATACTIVE'             => 'Zalando.at Preis',
    'GENERAL_ARTICLE_FCTBONEZAATPRICE'              => 'Zalando.at aktiv',
    'GENERAL_ARTICLE_FCTBONEEBDEPRICE'              => 'Ebay Preis',
    'GENERAL_ARTICLE_FCTBONEEBDEACTIVE'             => 'Ebay aktiv',
    'GENERAL_ARTICLE_FCTBONERADEPRICE'              => 'Rakuten Preis',
    'GENERAL_ARTICLE_FCTBONERADEACTIVE'             => 'Rakuten aktiv',
    'GENERAL_ARTICLE_FCTBONEWBDEPRICE'              => 'Weltbild.de Preis',
    'GENERAL_ARTICLE_FCTBONEWBDEACTIVE'             => 'Weltbild.de aktiv',
    'GENERAL_ARTICLE_FCTBONEREMOVEVARIANT'          => 'Variante für Export deaktivieren',

    'FCTRADEBYTEONE_OXID'                           => 'OXID',
);

if (class_exists('\FATCHIP\fcTradebyteOne\Core\fctradebyteone_base')) {
    $oTbBase = oxNew('\FATCHIP\fcTradebyteOne\Core\fctradebyteone_base');
    $aChannels = $oTbBase->fcGetChannelsFromXml();
    foreach ($aChannels as $aChannel) {
        $aLang['SHOP_MODULE_blFcTbOneChannel' . ucfirst($aChannel['ident'])] = $aChannel['title'];
        $aLang['SHOP_MODULE_blFcTbOneChannel' . ucfirst($aChannel['ident'] . 'UVP')] = 'UVP statt oxprice f&uuml;r ' . $aChannel['title'] . ' benutzen';
        $aLang['SHOP_MODULE_blFcTbOneChannel' . ucfirst($aChannel['ident'] . '_0')] = 'Inactive';
        $aLang['SHOP_MODULE_blFcTbOneChannel' . ucfirst($aChannel['ident'] . '_1')] = 'Active';
        $aLang['SHOP_MODULE_blFcTbOneChannel' . ucfirst($aChannel['ident'] . '_2')] = 'Inactive, but visible in admin';
    }
}

