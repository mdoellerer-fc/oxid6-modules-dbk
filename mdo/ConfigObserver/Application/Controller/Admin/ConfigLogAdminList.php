<?php

namespace mdo\ConfigObserver\Application\Controller\Admin;

use mdo\ConfigObserver\Application\Model\Admin\ConfigLog;
use mdo\ConfigObserver\Application\Model\Admin\ConfigLogList;
use OxidEsales\Eshop\Application\Controller\Admin\AdminListController;

class ConfigLogAdminList extends AdminListController
{
    /**
     * @var string
     */
    protected $_sListClass = ConfigLog::class;
    /**
     * @var string
     */
    protected $_sListType = ConfigLogList::class;


    public function __construct()
    {
        parent::__construct();
        $this->_iViewListSize = 25;
    }

    /**
     * @var string
     */
    protected $_sThisTemplate = '';


    /**
     * central render function
     *
     * @return string|null
     */
    public function render()
    {
        parent::render();
        $_sThisTemplate = 'ConfigLogAdminList.tpl';

        return $_sThisTemplate;
    }
}