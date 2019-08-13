<?php
class Karelsky_StoreInfo_Model_Mysql4_StoreInfo_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract{
    public function _construct(){
    parent::_construct();
        $this->_init('storeinfo/storeinfo');
    }
}

?>