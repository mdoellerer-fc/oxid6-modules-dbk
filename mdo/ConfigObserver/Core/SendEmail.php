<?php


namespace mdo\ConfigObserver\Core;


use mdo\ConfigObserver\Application\Model\Admin\ConfigLog;
use OxidEsales\Eshop\Core\Field;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\UniversallyUniqueIdGenerator;


class SendEmail extends SendEmail_parent
{
    private $changedSettings;
    private $oldSettings;
    private $moduleId;
    private $timeOfChanges;
    private $userResponsible;
    private $domain;
    private $path;

    public function __construct(){
        parent::__construct();
        $this->domain = Registry::getConfig()->getConfigParam('sShopURL');
        $this->path = Registry::getConfig()->getConfigParam('sShopDir');
    }

    public function setData(array $changedSettings, array $oldSettings, string $moduleId, string $userName)
    {
        $this->changedSettings = $changedSettings;
        $this->oldSettings = $oldSettings;
        $this->moduleId = $moduleId;
        $this->timeOfChanges = date("c", time());
        $this->userResponsible = $userName;
    }

    private function prepareDifferences(){

        $bodyDiff = "<p>We identified the following changes</p>";

        foreach ($this->changedSettings as $key => $value){
            $bodyDiff .= "<p><h3>Property key: " . $key . "</h3><br>";
            $bodyDiff .= "old value: " . $this->oldSettings[$key] . "<br>";
            $bodyDiff .= "new value: " . $this->changedSettings[$key] . "<br>";
            $bodyDiff .= "</p>";

            $this->logDifferences($key);
        }
        return $bodyDiff;
    }

    private function getMessageBody(){
        $body = "<h2>Changes in Configuration for the ModuleId: {$this->moduleId}</h2>";
        $body .= $this->prepareDifferences();
        $body .= "<p><strong>Time of the Changes</strong>: {$this->timeOfChanges} </p>";
        $body .= "<p><strong>Made by User</strong>: {$this->userResponsible} </p>";
        $body .= "<p><strong>Path</strong>: {$this->path} </p>";
        $body .= "<p><strong>Domain</strong>: {$this->domain} </p>";

        return $body;
    }

    public function sendEmailWithConfigDifferences(){
        if (count($this->changedSettings) < 1){
            return true;
        }

        if (empty($this->moduleId)){
            return false;
        }
        $emailRecipient = Registry::getConfig()->getConfigParam('sMdoConfigObserverEmailRecipient');

        if (!filter_var($emailRecipient, FILTER_VALIDATE_EMAIL)){
            return false;
        }

        // shop info
        $oShop = $this->_getShop();
        //set mail params (from, fromName, smtp)
        $this->_setMailParams($oShop);
        $this->setBody($this->getMessageBody());
        $this->setSubject("Settings for Mdo Shop have been changed.");
        $this->setRecipient($emailRecipient);
        $this->setFrom($oShop->oxshops__oxinfoemail->getRawValue(), $oShop->oxshops__oxname->getRawValue());

        return $this->send();
    }

    private function logDifferences($key){
        $adminLog = oxNew(ConfigLog::class);
        $idGen = oxNew(UniversallyUniqueIdGenerator::class);

        $adminLog->mdo_config_log__oxid              = new Field($idGen->generate());
        $adminLog->mdo_config_log__setting_name      = new Field($key);
        $adminLog->mdo_config_log__old_value         = new Field($this->oldSettings[$key]);
        $adminLog->mdo_config_log__new_value         = new Field($this->changedSettings[$key]);
        $adminLog->mdo_config_log__time_of_change    = new Field(date('Y-m-d H:i:s'));
        $adminLog->mdo_config_log__user_responsible  = new Field($this->userResponsible);
        $adminLog->mdo_config_log__path              = new Field($this->path);
        $adminLog->mdo_config_log__domain            = new Field($this->domain);
        $adminLog->save();
    }
}