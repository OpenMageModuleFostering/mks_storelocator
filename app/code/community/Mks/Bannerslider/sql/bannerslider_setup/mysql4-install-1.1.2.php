<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table  {$this->getTable('mkslightboxslider')}(id int not null auto_increment, title varchar(255),  image varchar(255), url varchar(255), category varchar(100), description varchar(255),primary key(id));

INSERT INTO {$this->getTable('mkslightboxslider')} (`title`,`image`,`url`,`description`,`status`) VALUES 
('Slider 1','responsivebannerslider/bannerslider/1.jpg','http://www.magentocommerce.com/magento-connect/developer/mukeshsaini','Banner 1','0'),
('Slider 2','responsivebannerslider/bannerslider/2.jpg','http://www.magentocommerce.com/magento-connect/developer/mukeshsaini','Banner 2','0'),
('Slider 3','responsivebannerslider/bannerslider/3.jpg','http://www.magentocommerce.com/magento-connect/developer/mukeshsaini','Banner 3','0');	
	
SQLTEXT;

$installer->run($sql);
//demo 
Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 
