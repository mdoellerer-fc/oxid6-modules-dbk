<?php


namespace mdo\ConfigObserver\Application\Controller\Admin;


use mdo\ConfigObserver\Core\SendEmail;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Bridge\ModuleConfigurationDaoBridgeInterface;

class ModuleConfiguration extends ModuleConfiguration_parent
{
    private $oldSettings = [];

    public function saveConfVars(){
        $settings = [];
        foreach ($this->_aConfParams as $requestParameterKey) {
            $settingsFromRequest = Registry::getRequest()->getRequestEscapedParameter($requestParameterKey);

            if (\is_array($settingsFromRequest)) {
                foreach ($settingsFromRequest as $name => $value) {
                    $settings[$name] = $value;
                }
            }
        }
        $changedSettings = $this->checkValuesChanged($settings);
        parent::saveConfVars();

        $user = Registry::getSession()->getUser();
        $username = $user->oxuser__oxusername->value;

        $sendEmail = new SendEmail();
        $sendEmail->setData($changedSettings, $this->oldSettings, $this->getModuleId(), $username);
        $sendEmail->sendEmailWithConfigDifferences();
    }

    private function checkValuesChanged(array $settingsFromRequest){
        $moduleConfigurationDaoBridge = $this->getContainer()->get(ModuleConfigurationDaoBridgeInterface::class);
        $moduleConfiguration = $moduleConfigurationDaoBridge->get($this->getModuleId());
        $moduleSettings = $moduleConfiguration->getModuleSettings();

        if (!empty($moduleSettings)) {
            foreach ($settingsFromRequest as $name => $value) {
                foreach ($moduleSettings as $moduleSetting) {
                    if ($moduleSetting->getName() === $name) {
                        if ($moduleSetting->getType() === 'aarr') {
                            $value = $this->_multilineToAarray($value);
                        }
                        if ($moduleSetting->getType() === 'arr') {
                            $value = $this->_multilineToArray($value);
                        }
                        if ($moduleSetting->getType() === 'bool') {
                            $value = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                        }

                        if ($moduleSetting->getValue() === $value){
                            unset($settingsFromRequest[$name]);
                        }
                        else{
                            $settingsFromRequest[$name] = var_export($value, true);
                            $this->oldSettings[$name] = var_export($moduleSetting->getValue(), true);
                        }
                    }
                }
            }
            return $settingsFromRequest;
        }
    }

    private function getModuleId(){
        if (empty($this->_sModuleId)) {
            $this->_sModuleId = $this->_sEditObjectId
                ?? Registry::getRequest()->getRequestEscapedParameter('oxid')
                ?? Registry::getSession()->getVariable('saved_oxid');
        }

        return $this->_sModuleId;
    }

}