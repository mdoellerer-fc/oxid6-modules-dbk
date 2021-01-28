<?php


namespace FATCHIP\fcTradebyteOne\Application\Model;

use OxidEsales\Eshop\Core\Field;
use OxidEsales\Eshop\Core\Model\ListModel;

class fctradebyteone_channel_list extends ListModel
{
	/**
     * Class name
     * @var string name of current class
     */
    protected $_sClassName = 'FATCHIP\fcTradebyteOne\Application\Model\fctradebyteone_channel';
    
    /**
     * Core database table name. $sCoreTable could be only original data table name and not view name.
     * @var string
     */
    protected $_sCoreTable = 'fctbone_channels';

    
	/**
     * Class constructor, initiates parent constructor (parent::oxBase()), loads
     * base shop objects.
     *
     * @param void
     * @return null
     */
    public function __construct()
    {    
        parent::__construct();

        $this->init($this->_sClassName, $this->_sCoreTable);
    }

}