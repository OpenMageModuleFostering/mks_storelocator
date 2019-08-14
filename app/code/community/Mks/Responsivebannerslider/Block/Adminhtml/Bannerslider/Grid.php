<?php

class Mks_Responsivebannerslider_Block_Adminhtml_Bannerslider_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("bannersliderGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("ASC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("responsivebannerslider/bannerslider")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("responsivebannerslider")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "id",
				));
                
				$this->addColumn("title", array(
				"header" => Mage::helper("responsivebannerslider")->__("Title"),
				"index" => "title",
				));
						$this->addColumn('status', array(
						'header' => Mage::helper('responsivebannerslider')->__('Status'),
						'index' => 'status',
						'type' => 'options',
						'options'=>Mks_Responsivebannerslider_Block_Adminhtml_Bannerslider_Grid::getOptionArray5(),				
						));
						
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('id');
			$this->getMassactionBlock()->setFormFieldName('ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_bannerslider', array(
					 'label'=> Mage::helper('responsivebannerslider')->__('Remove Bannerslider'),
					 'url'  => $this->getUrl('*/adminhtml_bannerslider/massRemove'),
					 'confirm' => Mage::helper('responsivebannerslider')->__('Are you sure?')
				));
			return $this;
		}
			
		static public function getOptionArray5()
		{
            $data_array=array(); 
			$data_array[0]='Yes';
			$data_array[1]='No';
            return($data_array);
		}
		static public function getValueArray5()
		{
            $data_array=array();
			foreach(Mks_Responsivebannerslider_Block_Adminhtml_Bannerslider_Grid::getOptionArray5() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		

}