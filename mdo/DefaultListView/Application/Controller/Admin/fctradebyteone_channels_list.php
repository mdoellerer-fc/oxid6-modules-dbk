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

namespace FATCHIP\fcTradebyteOne\Application\Controller\Admin;

use OxidEsales\Eshop\Application\Controller\Admin\AdminListController;

class fctradebyteone_channels_list extends AdminListController
{
	/**
     * Name of chosen object class (default null).
     *
     * @var string
     */
    protected $_sListClass = 'FATCHIP\fcTradebyteOne\Application\Model\fctradebyteone_channel';
    
	/**
     * Current class template name.
     * @var string
     */
    protected $_sThisTemplate = 'fctradebyteone_channels_list.tpl';
    
    /**
     * Channels
     * @var array
     */
    protected $_aFCChannels = null;

	/**
	 * Loads channels
     *
	 * @param void
	 * @return array
	 */
	public function fcGetChannels()	{
		if ($this->_aFCChannels === null) {
            $oTbBase = oxNew('FATCHIP\fcTradebyteOne\Core\fctradebyteone_base');
            $aChannels = $oTbBase->fcGetChannelsFromXml();
            $this->_aFCChannels = $aChannels;
		}
		return $this->_aFCChannels;
	}
	
	/**
	 * Returns channel config param name by given channel id
     *
     * @param string  $sIdent
	 * @return string
	 */
	public function fcGetChannelConfigParamName($sIdent) {
		$aChannels = $this->fcGetChannels();
		
		if ($aChannels) {
			foreach ($aChannels as $aChannel) {
				if ($aChannel['ident'] == $sIdent) {
					return $aChannel['confBool'];
				}	
			}
		}
		return false;
	}

	public function deleteEntry(){
        $objectId = $this->getEditObjectId();

        $channel = oxNew('FATCHIP\fcTradebyteOne\Application\Model\fctradebyteone_channel');
        $channel->load($objectId);
        $channelIdent = $channel->getIdentifier();

        $dbHelper = oxNew('FATCHIP\fcTradebyteOne\Core\fctradebyteone_dbhelper');
        $dbHelper->fcDeleteChannelsToProductWhenChannelDeactivated($channelIdent);

        parent::deleteEntry();
    }
}