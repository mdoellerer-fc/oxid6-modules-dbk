<?php


namespace mdo\ConfigObserver\Application\Model\Admin;


class ConfigLog extends \OxidEsales\Eshop\Core\Model\BaseModel
{
    /**
     * @var string
     */
    protected $_sClassName = 'configlog';

    public function __construct()
    {
        parent::__construct();
        $this->init('mdo_config_log');
    }
}