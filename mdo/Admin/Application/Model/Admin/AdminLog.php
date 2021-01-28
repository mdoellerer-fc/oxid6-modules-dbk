<?php


namespace mdo\Admin\Application\Model\Admin;


class AdminLog extends \OxidEsales\Eshop\Core\Model\BaseModel
{
    /**
     * @var string
     */
    protected $_sClassName = 'adminlog';

    public function __construct()
    {
        parent::__construct();
        $this->init('mdo_admin_log');
    }
}