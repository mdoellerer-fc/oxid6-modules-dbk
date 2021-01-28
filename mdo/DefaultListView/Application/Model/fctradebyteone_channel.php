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

namespace FATCHIP\fcTradebyteOne\Application\Model;

use OxidEsales\Eshop\Core\Field;
use OxidEsales\Eshop\Core\Model\BaseModel;

class fctradebyteone_channel extends BaseModel
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

        $this->init($this->_sCoreTable);
    }

    public function getIdentifier(){
        return $this->fctbone_channels__fcchannelid->value;
    }

}