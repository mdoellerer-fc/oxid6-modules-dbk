<?php


namespace mdo\ConfigObserver\Application\Model\Admin;


class ConfigLogList extends \OxidEsales\Eshop\Core\Model\ListModel
{
    public function __construct($sObjectsInListName = 'configlog' ){
        parent::__construct($sObjectsInListName);

    }
}