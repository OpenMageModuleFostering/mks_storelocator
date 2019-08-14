<?php


class Mks_Responsivebannerslider_Block_Adminhtml_Bannerslider extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_bannerslider";
	$this->_blockGroup = "responsivebannerslider";
	$this->_headerText = Mage::helper("responsivebannerslider")->__("Bannerslider Manager");
	$this->_addButtonLabel = Mage::helper("responsivebannerslider")->__("Add New Item");
	parent::__construct();
	
	}

}