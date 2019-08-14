<?php
class Mks_Responsivebannerslider_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("banner slider"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("banner slider", array(
                "label" => $this->__("banner slider"),
                "title" => $this->__("banner slider")
		   ));

      $this->renderLayout(); 
	  
    }
}