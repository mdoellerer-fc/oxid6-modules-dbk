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

use OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController;

class fctradebyteone_channels_main extends AdminDetailsController
{
	/**
     * Current class template name.
     * @var string
     */
    protected $_sThisTemplate = 'fctradebyteone_channels_main.tpl';

    /**
     * Instance of config object
     * @var object
     */
    protected $_oTbConfig = null;

    /**
     * Inits and returns instance of tb config opject
     *
     * @param void
     * @return object
     */
    public function fcGetTbConfig() {
        if ($this->_oTbConfig === null) {
            $this->_oTbConfig = oxNew('FATCHIP\fcTradebyteOne\Application\Controller\Admin\fctradebyteone_config');
        }

        return $this->_oTbConfig;
    }

    /**
     * Render
     *
     * @param void
     * @return string
     */
    public function render() {
        $sTemplate = parent::render();
   		$sOxid = $this->_aViewData["oxid"] = $this->getEditObjectId();
        
        $oChannel = oxNew('FATCHIP\fcTradebyteOne\Application\Model\fctradebyteone_channel');
        $blOxidAvailable = ($sOxid != "-1" && isset($sOxid));

        if ($blOxidAvailable) {
            // load object
            $oChannel->load($sOxid);
        }

        $this->_aViewData['edit'] = $oChannel;

        return $sTemplate;
    }

    /**
	 * Saves data
     *
     * @param void
     * @return void
	 */
	public function save() {
		parent::save();

        $sOxid = $this->getEditObjectId();
        $oConfig = $this->getConfig();
        $aParams = $oConfig->getRequestParameter("editval");

		$oObject = oxNew('FATCHIP\fcTradebyteOne\Application\Model\fctradebyteone_channel');

		if ($sOxid != "-1") {
            $oObject->load($sOxid);
        } else {
		    $sCoreTable = (string) $oObject->getCoreTableName();
        	$aParams[$sCoreTable.'__oxid'] = null;
            $aParams[$sCoreTable.'__fcchannelactive'] = 1;
        }

        $oObject->assign($aParams);
        $oObject->save();

        $this->_sEditObjectId = $this->_sSavedId = $oObject->getId();
        $this->_aViewData["updatelist"] = 1;
	}
	
	/**
     * Returns active/editable object id
     *
     * @param void
     * @return string
     */
    public function getEditObjectId() {
        $oFcTradebyteoneConfig = oxNew('FATCHIP\fcTradebyteOne\Application\Controller\Admin\fctradebyteone_config');
        $sOxid = $oFcTradebyteoneConfig->getEditObjectId();

        return $sOxid;
    }

	/**
	 * Loads channels
     *
	 * @param void
	 * @return array
	 */
	public function fcGetChannels()	{
        $oTbBase = oxNew('FATCHIP\fcTradebyteOne\Core\fctradebyteone_base');
        $aChannels = $oTbBase->fcGetChannelsFromXml();
        return $aChannels;
	}


    /**
     * Wrapper returns url path to module img folder
     *
     * @return mixed
     */
    public function fcGetModuleImgUrl() {
        $oTbConfig = $this->fcGetTbConfig();
        $sImgUrl = $oTbConfig->fcGetModuleImgUrl();

        return $sImgUrl;
    }
}
