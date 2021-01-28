<?php

namespace mdo\Admin\Application\Controller\Admin;

use mdo\Admin\Application\Model\Admin\AdminLog;
use mdo\Admin\Application\Model\Admin\AdminLogList;
use OxidEsales\Eshop\Application\Controller\Admin\AdminListController;

class AdminLogAdminList extends AdminListController
{
    /**
     * @var string
     */
    protected $_sListClass = AdminLog::class;
    /**
     * @var string
     */
    protected $_sListType = AdminLogList::class;


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
        $_sThisTemplate = 'AdminLogAdminList.tpl';

        return $_sThisTemplate;
    }
}