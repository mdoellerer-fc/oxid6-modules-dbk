<?php


namespace mdo\TemplateCommands\Application\Controller\Admin;


use OxidEsales\Eshop\Application\Controller\Admin\AdminController;
use OxidEsales\Eshop\Core\Registry;

class SyselevenMaintenance extends AdminController
{
    const STATS_MAINTENANCE = 'under maintenance';
    const STATS_ONLINE = 'online';
    const STATS_OFFLINE = 'offline';

    private $vhosts = [];

	public $aLoadbalancer = array(
		'10.129.14.43',
		'10.129.14.44'
	);

    public function init(){
        parent::init();
    }

    public function render(){
        parent::render();

        $formattedData = $this->getFormattedMaintenanceStatus();
        $this->_aViewData["aMaintenanceStatus"] = $formattedData;
        $this->_aViewData["aVhostOptions"] = $this->setVhostOptions($formattedData);

        return "SyselevenMaintenance.tpl";
    }


    public function activate()
    {
	    $sVhost = Registry::getRequest()->getRequestEscapedParameter('vhost');
	    foreach ($this->aLoadbalancer AS $lbip) {
		    $curl = curl_init();
		    curl_setopt_array( $curl, array(
			    CURLOPT_URL            => "http://${lbip}:57511/maintenance/activate/". $sVhost,
			    CURLOPT_RETURNTRANSFER => true,
			    CURLOPT_VERBOSE        => true
		    ) );
		    $sResponse        = curl_exec( $curl );
		    $responseInfo     = curl_getinfo( $curl );
		    $httpResponseCode = $responseInfo['http_code'];
		    if ( substr( $httpResponseCode, 0, 1 ) != '2' ) {
			    echo $sResponse;
			    echo $responseInfo;
			    echo $httpResponseCode;
			    exit;
			    return false;
		    }
		    curl_close( $curl );
	    }
    }

	public function deactivate()
	{
		$sVhost = Registry::getRequest()->getRequestEscapedParameter('vhost');
		foreach ($this->aLoadbalancer AS $lbip) {
			$curl = curl_init();
			curl_setopt_array( $curl, array(
				CURLOPT_URL            => "http://${lbip}:57511/maintenance/deactivate/". $sVhost,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_VERBOSE        => true
			) );
			$sResponse        = curl_exec( $curl );
			$responseInfo     = curl_getinfo( $curl );
			$httpResponseCode = $responseInfo['http_code'];
			if ( substr( $httpResponseCode, 0, 1 ) != '2' ) {
				echo $sResponse;
				echo $responseInfo;
				echo $httpResponseCode;
				exit;
				return false;
			}
			curl_close( $curl );
		}
	}

    public function getMaintenanceStatus()
    {
    	$aMaintenanceStatus = array();

		foreach ($this->aLoadbalancer AS $lbip) {
			$curl = curl_init();
			curl_setopt_array( $curl, array(
				CURLOPT_URL            => "http://${lbip}:57511/maintenance/list",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_VERBOSE        => true,
                CURLOPT_CONNECTTIMEOUT => 6
            ) );
			$sResponse        = curl_exec( $curl );

            if ($sResponse === false){
                $aMaintenanceStatus[$lbip] =  $this->returnUnavailableConnectionData();
            }
            else{
                $responseInfo     = curl_getinfo( $curl );
                $httpResponseCode = $responseInfo['http_code'];
                if ( substr( $httpResponseCode, 0, 1 ) !== '2' ) {
                    echo $sResponse;
                    echo $responseInfo;
                    echo $httpResponseCode;
                    exit;
                    return false;
                }
                $aMaintenanceStatus[$lbip] = nl2br($sResponse);
            }

			curl_close( $curl );
		}

		return $aMaintenanceStatus;
    }


    public function testConnection(){
        $curl = curl_init();
        curl_setopt_array( $curl, array(
            CURLOPT_URL            => "http://${$this->aLoadbalancer[0]}:57511/maintenance/list",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_VERBOSE        => true,
            CURLOPT_CONNECTTIMEOUT => 8
        ) );
        $sResponse = curl_exec( $curl );
        return (bool)$sResponse;
    }

    public function returnUnavailableConnectionData(){
        $sMaintenanceStatus = nl2br('stage.campdavid-soccx.at not reachable
stage.campdavid-soccx.de not reachable
stage.harlemsoul.de not reachable
stage.mehrwertclub.de not reachable
www.campdavid-soccx.at not reachable
www.campdavid-soccx.de not reachable
www.harlemsoul.de not reachable
www.mehrwertclub.de not reachable
');
        return $sMaintenanceStatus;
    }


    public function getFormattedMaintenanceStatus(){
        $rawData = $this->getMaintenanceStatus();

        return $this->setClassesForStatus($rawData);
    }


    public function setClassesForStatus($dataFromListCommand){
        $list = [];
        foreach ($dataFromListCommand as $key => $vhostdata){
            $vhostdata = explode("<br />", $vhostdata);
            $vhost_info = [];

            foreach ($vhostdata as $vhost){
                if (strlen(trim($vhost)) > 1){
                    $class = 'null';
                    if (str_contains($vhost, self::STATS_ONLINE)){
                        $class = 'pass';
                    }
                    if (str_contains($vhost, self::STATS_MAINTENANCE)){
                        $class = 'pmin';
                    }
                    if (str_contains($vhost, self::STATS_OFFLINE)){
                        $class = 'fail';
                    }
                    $vhost_info[$vhost] = $class;
                    $list[$key] = $vhost_info;
                }
            }
        }
        return $list;
    }

    public function setVhostOptions($formattedData)
    {
        $vhosts = [];
        foreach ($formattedData as $vhostList){
            foreach ($vhostList as $key => $value){
                $aStatus = explode(' ', $key);
                $aStatus[0] = preg_replace("/\\r\\n|\\r|\\n/", '',$aStatus[0]);
                $vhosts[] = $aStatus[0];
            }
            if (count($vhosts) > 0){
                break;
            }
        }
        return $vhosts;
    }


}
