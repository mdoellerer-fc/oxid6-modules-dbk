<?php


namespace mdo\ConfigObserver\Core;


use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;

class Events
{

    /**
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public static function onActivate()
    {
        $oDb = DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC);


        $sSql = "CREATE TABLE IF NOT EXISTS `mdo_config_log` (
        `OXID` char(32) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
        `SETTING_NAME` varchar(64) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
        `OLD_VALUE` TEXT CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
        `NEW_VALUE` TEXT CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
        `TIME_OF_CHANGE` timestamp NOT NULL  NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Timestamp',
        `USER_RESPONSIBLE` varchar(64) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
        `DOMAIN` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
        `PATH` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
        PRIMARY KEY (`OXID`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        $oDb->execute($sSql);


    }

}
