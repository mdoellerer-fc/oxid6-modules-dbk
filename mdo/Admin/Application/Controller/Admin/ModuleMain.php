<?php


namespace mdo\Admin\Application\Controller\Admin;

use mdo\Admin\Core\Provider;

/**
 * Module main class
 */
class ModuleMain extends ModuleMain_parent {

    /**
     * Activate module
     */
    public function activateModule(){
        parent::activateModule();
        Provider::clearCacheTmp();
    }

    /**
     * Deactivate module
     */
    public function deactivateModule(){
        parent::deactivateModule();
        Provider::clearCacheTmp();
    }
}