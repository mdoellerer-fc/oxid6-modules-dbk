<?php


namespace mdo\Admin\Core\Event;


use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;

class AdminEvents
{

    /**
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public static function onActivate()
    {
        $oDb = DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC);


        $sSql = "CREATE TABLE IF NOT EXISTS `oxadminlog` (
				  OXID varchar(32) NOT NULL,
				  OXTIMESTAMP timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Timestamp',
				  OXUSERID char(32) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '' COMMENT 'User id (oxuser)',
				  OXSQL text NOT NULL COMMENT 'Logged sql',
				  PRIMARY KEY (`OXID`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Logs admin actions'";
        $oDb->execute($sSql);
    }

}
