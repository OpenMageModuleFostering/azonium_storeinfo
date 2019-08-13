<?php
class Azonium_StoreInfo_Model_Mysql4_StoreInfo extends Mage_Core_Model_Mysql4_Abstract{
    public function _construct(){
        $this->_init('storeinfo/storeinfo','config_id');
    }
}

?>