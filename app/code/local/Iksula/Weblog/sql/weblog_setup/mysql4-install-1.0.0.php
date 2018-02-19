<?php
$installer = $this;
 
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();
 
$setup->addAttribute('catalog_product', 'start_date', array(
    'type'              => 'datetime',
    'backend'           => '',
    'frontend'          => '',
    'label'             => 'Sale Start Date&Time',
    'group'                => 'General',
    'input'             => 'datetime',
    'class'             => 'validate-date',
    'source'            => '',
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible'           => false,
    'required'          => false,
    'user_defined'      => true,
    'default'           => '',
    'searchable'        => true,
    'filterable'        => false,
    'comparable'        => false,
    'visible_on_front'  => false,
    'used_in_product_listing' => true,
    'unique'            => false,
    'apply_to'             => array('simple', 'configurable', 'virtual', 'downloadable'),
    'is_configurable'   => false,
    'is_used_for_promo_rules' => true,
));
$installer->endSetup();
 
$installer->startSetup();
 
$setup->addAttribute('catalog_product', 'end_date', array(
    'type'              => 'datetime',
    'backend'           => '',
    'frontend'          => '',
    'label'             => 'Sale End Date&Time',
    'group'                => 'General',
    'input'             => 'datetime',
    'class'             => 'validate-date',
    'source'            => '',
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible'           => false,
    'required'          => false,
    'user_defined'      => true,
    'default'           => '',
    'searchable'        => true,
    'filterable'        => false,
    'comparable'        => false,
    'visible_on_front'  => false,
    'used_in_product_listing' => true,
    'unique'            => false,
    'apply_to'             => array('simple', 'radius_config(radius_handle, file)urable', 'virtual', 'downloadable'),
    'is_configurable'   => false,
    'is_used_for_promo_rules' => true,
));
$installer->endSetup();




