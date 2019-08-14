<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table mksstorelocator(id int not null auto_increment, name varchar(100), address varchar(255),zipcode varchar(100),city varchar(100),country_id varchar(100),phone varchar(100),fax varchar(100),description varchar(255),store_url varchar(100),image varchar(100),marker varchar(100),lat varchar(100),longt varchar(100),status varchar(100),primary key(id));
		
SQLTEXT;

$installer->run($sql);
//demo 
Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 
