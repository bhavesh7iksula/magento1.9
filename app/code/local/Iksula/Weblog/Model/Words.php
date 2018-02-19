<?php
class Iksula_Weblog_Model_Words
{
    public function toOptionArray()
    {
        return array(
            array('value'=>1, 'label'=>Mage::helper('weblog')->__('Yes')),            
            array('value'=>0, 'label'=>Mage::helper('weblog')->__('No')),                        
        );
    }

}