<?php
class Iksula_Weblog_Block_Weblog extends Mage_Core_Block_Template
{
    public function getActionOfForm(){

		return $this->getUrl('weblog/index/createPerson');

		}
		public function showData(){
			$name = array();
			$posts = Mage::getModel('weblog/blogpost')->getCollection();
		    return $posts;
	}
	public function getActionOfDelete(){
		return $this->getUrl('weblog/index/delete');
	}

}