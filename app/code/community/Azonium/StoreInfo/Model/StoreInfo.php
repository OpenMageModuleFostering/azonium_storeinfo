<?php
class Karelsky_StoreInfo_Model_StoreInfo extends Mage_Core_Model_Abstract{
    public function _construct(){
    parent::_construct();
        $this->_init('storeinfo/storeinfo');
    }
}

?>