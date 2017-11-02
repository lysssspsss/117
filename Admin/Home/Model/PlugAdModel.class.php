<?php
namespace Home\Model;
use Think\Model\RelationModel;

 class PlugadModel extends RelationModel{
   protected $_link=array(
       'Plug_adtype' => array(
		'mapping_type'  => self::BELONGS_TO,
		'class_name'    => 'Plug_adtype',
		'foreign_key'   => 'plug_ad_adtypeid',
		'as_fields'  => 'plug_adtype_name',
		),
   );

}




?>